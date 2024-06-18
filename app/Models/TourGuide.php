<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'kota_wisata',
        'bahasa',
        'harga',
        'no_hp',
        'email',
        'password',
        'jenis_kelamin',
    ];

    public function wisatas()
    {
        return $this->belongsToMany(Wisata::class, 'tour_guide_wisata');
    }
    public function sewas()
    {
        return $this->hasMany(Sewa::class);
    }

}
