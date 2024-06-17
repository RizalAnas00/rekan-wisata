<?php

// app/Models/Sewa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tour_guide_id',
        'wisata_id',
        'tanggal_keberangkatan',
        'pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tourGuide()
    {
        return $this->belongsTo(TourGuide::class);
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}

