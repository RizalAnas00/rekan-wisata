<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'wisata_id',
        'user_id',
        'tanggal_berangkat',
        'deskripsi',
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
