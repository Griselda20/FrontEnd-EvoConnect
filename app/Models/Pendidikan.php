<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan';

    protected $fillable = [
        'tingkat_pendidikan',
        'jurusan',
        'user_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'institusi',
        'deskripsi',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
