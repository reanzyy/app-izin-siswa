<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispensasi extends Model
{
    use HasFactory;

    protected $table = 'dispensasi';

    protected $guarded = [];

    protected $fillable = [
        'nama_siswa',
        'kelas',
        'jam_pelajaran',
        'jam_mulai',
        'jam_kembali',
        'keperluan',
        'waktu_input',
        'email',
        'plat_no',
        'status',
        'id_kelas',
        'id_jurusan',
    ];
}
