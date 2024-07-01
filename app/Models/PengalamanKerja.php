<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    use HasFactory;

    protected $table = 'pengalaman_kerja';
    
    protected $fillable = [
        'user_id',
        'role',
        'nama_perusahaan',
        'tanggal_bergabung',
        'tanggal_berakhir',
        'deskripsi_pekerjaan',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
