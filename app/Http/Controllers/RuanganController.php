<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\AdminProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = Ruangan::with('admins')->get();
        return view('admin.ruangan', compact('ruangan'));
    }

    public function create()
    {
        return view('admin.ruangan-create');
    }

    public function store(Request $request)
    {
        // Cek apakah admin memiliki profile yang lengkap
        $admin = Auth::user()->adminProfile;

        if (!$admin || !$admin->employee_id || !$admin->phone_number || !$admin->address) {
            return redirect()->route('ruangan.create')->with('warning', 'Lengkapi profil Anda sebelum mengupload ruangan.');
        }

        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kapasitas' => 'nullable|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string',
            'rating' => 'nullable|integer',
            'location' => 'nullable|string',
            'harga' => 'nullable|integer',
        ]);

        $gambarNama = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName(); // Buat nama unik
            $gambar->move(public_path('img/ruangan'), $gambarNama); // Pindahkan ke folder public/img/ruangan
        }

        $ruangan = Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'deskripsi' => $request->deskripsi,
            'kapasitas' => $request->kapasitas,
            'gambar' => $gambarNama ?? null, // Simpan hanya nama file ke database
            'category' => $request->category,
            'rating' => $request->rating,
            'location' => $request->location,
            'harga' => $request->harga
        ]);

        $admin = AdminProfile::where('employee_id', Auth::user()->adminProfile->employee_id)->first();
        if ($admin) {
            $ruangan->admins()->attach($admin->employee_id, ['role' => 'Uploader']);
        }

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('admin.ruangan-edit', compact('ruangan'));
    }

    public function update(Request $request, $id)
    {
        $ruangan = Ruangan::findOrFail($id);

        $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kapasitas' => 'nullable|integer',
            'foto_ruangan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string',
            'rating' => 'nullable|integer',
            'location' => 'nullable|string',
            'harga' => 'nullable|integer',
        ]);

        // Jika ada file gambar baru di-upload
        if ($request->hasFile('foto_ruangan')) {
            $file = $request->file('foto_ruangan');
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Buat nama unik

            // Hapus gambar lama jika ada
            if (!empty($ruangan->gambar) && file_exists(public_path('img/ruangan/' . $ruangan->gambar))) {
                unlink(public_path('img/ruangan/' . $ruangan->gambar));
            }

            // Simpan gambar baru di folder public/img/ruangan
            $file->move(public_path('img/ruangan'), $filename);

            // Simpan hanya nama file ke database
            $ruangan->gambar = $filename;
        }

        $ruangan->update([
            'nama_ruangan' => $request->nama_ruangan,
            'deskripsi' => $request->deskripsi,
            'kapasitas' => $request->kapasitas,
            'category' => $request->category,
            'rating' => $request->rating,
            'location' => $request->location,
            'harga' => $request->harga
        ]);

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        // Hapus foto jika ada
        if ($ruangan->foto_ruangan) {
            Storage::disk('public')->delete($ruangan->foto_ruangan);
        }

        $ruangan->delete();

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil dihapus!');
    }
}
