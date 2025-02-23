<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\SewaRuangan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SewaRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangan = Ruangan::all(); // Ambil semua ruangan
        return view('menyewa', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('menyewa-create', compact('ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $userProfile = Auth::user()->profile;

        if (!$userProfile) {
            return back()->with('error', 'Profil pengguna tidak ditemukan. Pastikan Anda sudah melengkapi profil.');
        }

        $request->validate([
            'jam_mulai' => 'required|date',
            'jam_selesai' => 'required|date|after:jam_mulai',
            'keperluan' => 'required|string|max:255',
        ]);

        $noTagihan = 'INV-' . strtoupper(Str::random(10)); // Membuat nomor tagihan unik

        SewaRuangan::create([
            'user_id' => Auth::id(),
            'ruangan_id' => $id,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'keperluan' => $request->keperluan,
            'status' => 'pending',
            'bank' => 'Bank BRI',
            'no_tagihan' => $noTagihan
        ]);

        return redirect()->route('sewa.history')->with('success', 'Penyewaan berhasil diajukan.');
    }

    public function history(Request $request)
    {
        $query = SewaRuangan::where('user_id', Auth::id());
        $history = $query->get();

        return view('menyewa-history', compact('history'));
    }
}
