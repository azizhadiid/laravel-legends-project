<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {}

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
    public function show()
    {
        $admin = Auth::user()->admin; // Mengambil admin profile dari user yang login
        return view('admin.profile', compact('admin'));
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
    public function update(Request $request)
    {
        $adminProfile = Auth::user()->adminProfile;

        // Validasi data
        $request->validate([
            'employee_id' => 'nullable|string|max:50',
            'nama' => 'nullable|string|max:255',
            'permissions' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'gender' => 'nullable|in:male,female,other',
            'birth_date' => 'nullable|date',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'department' => 'nullable|string|max:100',
            'last_login' => 'nullable|date',
            'status' => 'nullable|string|max:50',
        ]);

        // Update atau buat data profil
        if (!$adminProfile) {
            $adminProfile = new AdminProfile();
            $adminProfile->user_id = Auth::id();
        }

        $adminProfile->fill($request->except('profile_picture'));

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Hapus gambar lama jika ada
            if (!empty($adminProfile->profile_picture) && file_exists(public_path('img/' . $adminProfile->profile_picture))) {
                unlink(public_path('img/' . $adminProfile->profile_picture));
            }

            // Simpan gambar baru
            $file->move(public_path('img'), $filename);

            // Simpan nama file ke database
            $adminProfile->profile_picture = $filename;
        }

        // Simpan profile
        $adminProfile->save();

        return redirect()->route('admin.profile.show')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
