<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';
    
    protected $fillable = [
        'id_perusahaan',
        'judul_lowongan',
        'status_lowongan',
        'detail_pekerjaan',
        'tanggal_dibuka',
        'tanggal_ditutup',
        'lokasi',
        'kategori',
        'min_usia',
        'maks_usia',
        'sistem_kerja',
        'jenis_kelamin',
        'min_gaji',
        'maks_gaji',
    ];
}
