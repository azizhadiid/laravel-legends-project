<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';

    protected $fillable = ['nama_ruangan', 'deskripsi', 'kapasitas', 'gambar'];

    public function admins()
    {
        return $this->belongsToMany(AdminProfile::class, 'admin_ruangan', 'ruangan_id', 'employee_id')
            ->withPivot('role')
            ->withTimestamps();
    }
}
