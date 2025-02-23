<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 ruangan dengan rating di atas 4
        $ruanganTerbaik = Ruangan::where('rating', '>', 3)
            ->orderByDesc('rating')
            ->take(3)
            ->get();

        return view('home')->with('ruanganTerbaik', $ruanganTerbaik);
    }
}
