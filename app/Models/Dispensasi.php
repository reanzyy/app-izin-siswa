<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispensasi extends Model
{
    use HasFactory;

    protected $table = 'dispensasi';
    protected $primaryKey = 'id';


    protected $fillable = [
        'id',
        'nama_siswa',
        'id_kelas',
        'id_jurusan',
        'jam_mulai',
        'jam_kembali',
        'keperluan',
        'plat_no',
        'status',
        'id_guru',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
    public function jammulai()
    {
        return $this->belongsTo(JamPelajaran::class, 'jam_mulai', 'id');
    }
    public function jamkembali()
    {
        return $this->belongsTo(JamPelajaran::class, 'jam_kembali', 'id');
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }
}
