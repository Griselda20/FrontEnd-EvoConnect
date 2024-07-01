<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LamaranKerja extends Model
{
    use HasFactory;

    protected $table = 'lamaran_kerja';

    protected $fillable = [
        'id_user',
        'id_lowongan',
        'id_admin',
        'created_at',
        'updated_at',
        'status',
    ];
    
}
