<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use Illuminate\Support\Facades\Cookie;

class JurnalisController extends Controller
{
    // Menampilkan form penulisan berita
    public function WritePage()
    {
        $username = Auth::user()->name;
        return view('jurnalis.write', compact('username'));
    }

    // Menampilkan dashboard jurnalis
    public function dashboard()
    {
        $userId = Auth::id();
        $username = Auth::user()->name;
        $beritas =  Berita::where('id_penulis', $userId)->get();
        $jumlahBerita = Berita::where('id_penulis', $userId)->count();
        $totalViews = Berita::where('id_penulis', $userId)->sum('views');
        $MaxViews = Berita::where('id_penulis', $userId)->max('views');
        $MaxLikes = Berita::where('id_penulis', $userId)->max('likes');
        $totalLikes = Berita::where('id_penulis', $userId)->sum('likes');
        $totalDislikes = Berita::where('id_penulis', $userId)->sum('dislikes');
        return view('jurnalis.dashjour', compact('beritas', 'jumlahBerita', 'totalViews', 'totalLikes', 'totalDislikes', 'MaxViews', 'MaxLikes', 'username'));
    }

    // Menyimpan berita baru ke database
    public function write(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:25600', // 25MB
        ]);

        // Simpan gambar ke penyimpanan publik
        $path = $request->file('gambar')->store('uploads', 'public');

        // Buat entri berita baru
        Berita::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'changed_at' => now(),
            'created_at' => now(),
            'id_penulis' => Auth::id(),
        ]);

        return redirect('/jurnalis/tulis')->with('success', 'Berita berhasil dibuat!');
        return redirect('/jurnalis/tulis')->with('error', 'Gagal membuat berita. Silakan coba lagi.');

    }

    // Placeholder jika ingin membuat fitur baca berita oleh jurnalis
    public function listberita()
    {
        $username = Auth::user()->name;
        $beritas = Berita::where('id_penulis', Auth::id())->get();
        return view('jurnalis.newslist', compact('beritas','username'));
    }

    public function readberita(Request $request)
    {
        $beritas = Berita::orderBy('created_at', 'desc')->get(); 
        return view('ekslusif', compact('beritas'));
    }

    public function editpage($id_berita)
    {
        $username = Auth::user()->name;
        $berita = Berita::where('id_berita', $id_berita)->first();
        return view('jurnalis.edit', compact('username', 'berita'));
    }

    public function beritapage($id_berita)
    {
        $berita = Berita::where('id_berita', $id_berita)->firstOrFail();
        $beritaNext = Berita::where('id_berita', '!=', $id_berita)->get()->shuffle()->take(3);
    
        // Tambahkan view hanya jika belum ada cookie
        $viewCookie = 'viewed_' . $id_berita;
        if (!Cookie::has($viewCookie)) {
            $berita->views += 1;
            $berita->save();
            Cookie::queue($viewCookie, true, 60 * 24); // simpan selama 1 hari
        }
    
        return view('expost', compact('berita', 'beritaNext'));
    }


    public function edit(Request $request, $id_berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:25600', // optional
        ]);
    
        $berita = Berita::findOrFail($id_berita);
    
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads', 'public');
            $berita->gambar = $path;
        }
    
        $berita->judul = $request->judul;
        $berita->kategori = $request->kategori;
        $berita->deskripsi = $request->deskripsi;
        $berita->updated_at = now();
        $berita->save();
    
        return redirect()->back()->with('success', 'Berita berhasil diperbarui.');
    }


    // Placeholder untuk hapus berita
    public function delete($id_berita)
    {
        $berita = Berita::findOrFail($id_berita);
        $berita->delete();
    
        return redirect('/jurnalis/newslist')->with('success', 'Berita berhasil dihapus.');
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')->with('success', 'Berhasil logout');
}

public function cari(Request $request)
{
    $keyword = $request->input('q');

    $berita = Berita::where('judul', 'like', "%{$keyword}%")
                    ->orWhere('deskripsi', 'like', "%{$keyword}%")
                    ->latest()
                    ->get();

    return view('search', compact('berita', 'keyword'));
}

public function interact(Request $request)
{
    $berita = Berita::findOrFail($request->id_berita);
    $action = $request->action;

    $likeCookie = 'berita_like_' . $berita->id_berita;
    $dislikeCookie = 'berita_dislike_' . $berita->id_berita;

    switch ($action) {
        case 'like':
            if (!Cookie::has($likeCookie)) {
                // Jika sebelumnya sudah dislike, cabut dislike dulu
                if (Cookie::has($dislikeCookie) && $berita->dislikes > 0) {
                    $berita->dislikes -= 1;
                    Cookie::queue(Cookie::forget($dislikeCookie));
                }
                $berita->likes += 1;
                Cookie::queue($likeCookie, true, 60 * 24);
            }
            break;

        case 'unlike':
            if (Cookie::has($likeCookie) && $berita->likes > 0) {
                $berita->likes -= 1;
                Cookie::queue(Cookie::forget($likeCookie));
            }
            break;

        case 'dislike':
            if (!Cookie::has($dislikeCookie)) {
                // Jika sebelumnya sudah like, cabut like dulu
                if (Cookie::has($likeCookie) && $berita->likes > 0) {
                    $berita->likes -= 1;
                    Cookie::queue(Cookie::forget($likeCookie));
                }
                $berita->dislikes += 1;
                Cookie::queue($dislikeCookie, true, 60 * 24);
            }
            break;

        case 'undislike':
            if (Cookie::has($dislikeCookie) && $berita->dislikes > 0) {
                $berita->dislikes -= 1;
                Cookie::queue(Cookie::forget($dislikeCookie));
            }
            break;
    }

    $berita->save();

    return response()->json([
        'likes' => $berita->likes,
        'dislikes' => $berita->dislikes,
        'views' => $berita->views,
    ]);
}
}
