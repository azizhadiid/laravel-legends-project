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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
