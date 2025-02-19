<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SewaRuangan extends Model
{
    use HasFactory;

    protected $table = 'sewa_ruangan';

    protected $fillable = [
        'user_id',
        'ruangan_id',
        'jam_mulai',
        'jam_selesai',
        'keperluan',
        'status',
        'bank',
        'no_tagihan'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
