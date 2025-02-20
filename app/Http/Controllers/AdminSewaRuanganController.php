<?php

namespace App\Http\Controllers;

use App\Models\SewaRuangan;
use Illuminate\Http\Request;

class AdminSewaRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sewaRuangan = SewaRuangan::where('status', 'pending')->get();
        return view('admin.penyewa-ruangan', compact('sewaRuangan'));
    }

    public function verifikasi(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        $sewaRuangan = SewaRuangan::findOrFail($id);
        $sewaRuangan->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.sewa.index')->with('success', 'Status penyewaan berhasil diperbarui.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
