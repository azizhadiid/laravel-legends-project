<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah akun pengguna
        $totalUsers = UserProfile::count();
        $totalRuangan = Ruangan::count();

        // Kirim data ke view
        return view('admin.dashboard', compact('totalUsers', 'totalRuangan'));
    }
}
