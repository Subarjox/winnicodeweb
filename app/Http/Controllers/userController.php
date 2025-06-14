<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class userController extends Controller
{


    public function LoginForm()
    {
        return view('sign-in');
    }

    public function RegisterForm()
    {
        return view('sign-up');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect('/jurnalis/dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // pastikan email unik
            'password' => 'required|string|min:6|confirmed', // harus ada password_confirmation
            'terms' => 'accepted', // checkbox harus dicentang
        ]);

        // Simpan user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect setelah register berhasil
        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }

     public function logout()
    {
        Auth::logout();
        return redirect('/dashboard');
    }
}
