<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matchmaking extends Model
{
    use HasFactory;

    public function FindTrip()
    {
        return $this->belongsTo(countrie::class,'pays', 'code');
    }
}
