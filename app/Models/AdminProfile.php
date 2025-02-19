<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'employee_id',
        'nama',
        'permissions',
        'phone_number',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'gender',
        'birth_date',
        'profile_picture',
        'department',
        'last_login',
        'status'
    ];

    protected $primaryKey = 'employee_id'; // Menggunakan employee_id sebagai primary key
    public $incrementing = false; // Karena employee_id bukan integer
    protected $keyType = 'string'; // employee_id adalah string

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi Many-to-Many dengan Ruangan
    public function ruangan()
    {
        return $this->belongsToMany(Ruangan::class, 'admin_ruangan', 'employee_id', 'ruangan_id')
            ->withPivot('role') // Menyimpan role dalam pivot table
            ->withTimestamps(); // Menyimpan timestamps di tabel pivot
    }
}
