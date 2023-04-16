<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama_kelas', 'id_jurusan',
    ];

    public function dispensasi()
    {
        return $this->hasMany(Dispensasi::class, 'id_kelas', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
}
