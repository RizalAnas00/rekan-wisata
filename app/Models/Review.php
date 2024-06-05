<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'kontent',
        'rating',
        'wisata_id',    
        'user_id',
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

