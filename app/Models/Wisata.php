<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_wisata', 
        'kota', 
        'alamat_lengkap', 
        'deskripsi_wisata', 
        'kategori_wisata', 
        'image_path'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}

