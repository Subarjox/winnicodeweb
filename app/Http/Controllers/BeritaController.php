<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


abstract class Controller
{
    
}

class beritaController extends Controller
{
    public function ambilBerita()
    {
        $login = Http::post('https://winnicode.com/api/login', [
            'email' => 'dummy@dummy.com',
            'password' => 'dummy'
        ]);

        if (!$login->successful()) {
            return response()->json(['error' => 'Gagal login ke API'], 401);
        }

        $apiKey = $login['api_key'];

        $beritaResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Accept' => 'application/json'
        ])->get('https://winnicode.com/api/publikasi-berita');

        if (!$beritaResponse->successful()) {
            return response()->json(['error' => 'Gagal ambil data berita'], 500);
        }
        return $beritaResponse->json();
    }

    public function beritadashboard(){
        $beritaData = $this->ambilBerita();

        if (!$beritaData) {
            return response()->json(['error' => 'Gagal ambil data berita'], 500);
        }

        
        $beritaCollection = collect($beritaData)->sortByDesc('updated_at')->values();
        


        $beritahot = $beritaCollection->first();
        $beritabaru = $beritaCollection->slice(1); 
        
        
        return view('dashboard', [
            'beritahot' => $beritahot,
            'beritabaru' => $beritabaru
        ]);


    }

    public function beritaperpost($id)
    {
        $beritaData = $this->ambilBerita();
    
        if (!$beritaData) {
            abort(404, 'Data berita tidak ditemukan');
        }
    
        // Berita utama yang sedang dibuka
        $berita = collect($beritaData)->firstWhere('id', $id);
    
        if (!$berita) {
            abort(404, 'Berita tidak ditemukan');
        }
    
        // Ambil berita acak selain yang sedang dibaca
        $beritaRandom = collect($beritaData)
                            ->where('id', '!=', $id)
                            ->shuffle()
                            ->take(3); // jumlah yang ditampilkan
    
        return view('post', [
            'berita' => $berita,
            'beritaRandom' => $beritaRandom
        ]);
    }
    
}
