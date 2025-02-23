<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Pastikan email unik
            'password' => 'required|min:6|confirmed',
        ]);

        // Menambah Data ke dalam tabel Users
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Flash message sukses
        Session::flash('success', 'Registrasi berhasil! Silakan login.');
        return redirect()->route('login');
    }
}
