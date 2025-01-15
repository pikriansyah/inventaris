<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    // Halaman Register
    public function showRegister()
    {
        return view('register');
    }

    // Proses Register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',  // nama diubah menjadi name
            'email' => 'required|email|unique:penggunas',
            'password' => 'required|min:3|confirmed',  // katasandi diubah menjadi password
        ]);

        if ($request->password !== $request->password_confirmation) {
            // Menambahkan pesan kesalahan melalui session flash
            session()->flash('error', 'Konfirmasi password tidak cocok!');
            return back();
        }

        Pengguna::create([
            'name' => $request->name,  // nama diubah menjadi name
            'email' => $request->email,
            'password' => Hash::make($request->password),  // katasandi diubah menjadi password
        ]);

        

        // Menambahkan notifikasi sukses
        session()->flash('success', 'Registrasi berhasil! Silakan login.');

        return redirect()->route('login');
    }

    // Halaman Login
    public function showLogin()
    {
        return view('login');
    }

    // Proses Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',  // katasandi diubah menjadi password
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'Email / Password salah.',  // katasandi diubah menjadi password
        ]);
    }

    // Proses Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
