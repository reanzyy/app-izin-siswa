<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JamPelajaran extends Model
{
    use HasFactory;

    protected $table = 'jam_pelajaran';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','jam',
    ];

    public function Dispensasi(): HasMany
    {
        return $this->hasMany(Dispensasi::class, 'jam_mulai', 'id');
    }
    // public function Dispensasi()
    // {
    //     return $this->hasMany(Dispensasi::class, 'jam_kembali', 'id');
    // }
}
