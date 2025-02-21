<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;
use App\Models\Ruangan;
use App\Models\SewaRuangan;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah akun pengguna
        $totalUsers = UserProfile::count();
        $totalAdmin = AdminProfile::count();
        $totalRuangan = Ruangan::count();
        $totalSewa = SewaRuangan::count();

        // Ambil data sewa ruangan terbaru dengan relasi user dan ruangan
        $sewaRuangan = SewaRuangan::get();

        // Kirim data ke view
        return view('admin.dashboard', compact('totalUsers', 'totalRuangan', 'totalAdmin', 'totalSewa', 'sewaRuangan'));
    }
}
