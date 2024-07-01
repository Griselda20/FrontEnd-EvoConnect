<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable = [
        'nama_perusahaan',
        'lokasi_perusahaan',
        'deskripsi_perusahaan',
        'bidang_industri',
        'website_perusahaan',
        'kontak_perusahaan',
        'created_at',
        'updated_at',
    ];
}
