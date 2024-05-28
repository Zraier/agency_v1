<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoyUser extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function country()
    {
        return $this->belongsTo(countrie::class,'pays', 'code');
    }

    
}
