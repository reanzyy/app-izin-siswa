<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    use HasFactory;

    protected $table = 'cetak';

    protected $fillable = [
        'no_d'
    ];

    public function dispensasi()
    {
        return $this->belongsTo(Dispensasi::class, 'no_d', 'id');
    }
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id');
    }
}