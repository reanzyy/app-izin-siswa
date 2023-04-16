<?php

namespace App\Models;

use App\Models\Dispensasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','nama_jurusan',
    ];

    public function Dispensasi(): HasMany
    {
        return $this->hasMany(Dispensasi::class, 'id_jurusan', 'id');
    }

    public function kelas(){
        return $this->hasMany(Kelas::class, 'id_jurusan', 'id');
    }
}
