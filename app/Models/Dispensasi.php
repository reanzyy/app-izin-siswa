<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispensasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_siswa',
        'keperluan',
        'email',
        'plat_no',
        'waktu_input',
        'status',
    ];
}
