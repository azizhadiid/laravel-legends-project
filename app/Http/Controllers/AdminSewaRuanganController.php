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
}
