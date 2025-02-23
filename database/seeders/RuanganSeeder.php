<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ruangan::insert([
            [
                'nama_ruangan' => 'Ruang Meeting A',
                'deskripsi' => 'Ruangan meeting untuk 10 orang dengan fasilitas lengkap.',
                'kapasitas' => 10,
                'gambar' => 'meeting_a.jpg',
                'category' => 'Meeting Room',
                'rating' => 5,
                'location' => 'Lantai 1, Gedung A',
                'harga' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_ruangan' => 'Ruang Workshop B',
                'deskripsi' => 'Ruangan workshop luas dengan kapasitas hingga 50 orang.',
                'kapasitas' => 50,
                'gambar' => 'workshop_b.jpg',
                'category' => 'Workshop Room',
                'rating' => 4,
                'location' => 'Lantai 2, Gedung B',
                'harga' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_ruangan' => 'Auditorium C',
                'deskripsi' => 'Auditorium besar dengan sound system dan proyektor.',
                'kapasitas' => 100,
                'gambar' => 'auditorium_c.jpg',
                'category' => 'Auditorium',
                'rating' => 5,
                'location' => 'Lantai 3, Gedung C',
                'harga' => 1000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
