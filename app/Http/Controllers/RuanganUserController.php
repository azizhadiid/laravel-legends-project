<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangan = Ruangan::all(); // Mengambil semua data ruangan dari database
        return view('ruangan', compact('ruangan'));
    }

    public function show($id)
    {
        $ruangan = Ruangan::findOrFail($id); // Cari ruangan berdasarkan ID
        return view('ruangan-detail', compact('ruangan'));
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
