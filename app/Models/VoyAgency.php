<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoyAgency extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(countrie::class,'pays', 'code');
    }

    public function findname()
    {
        return $this->belongsTo(agencie::class,'id_agence', 'id_agence');
    }

    
}
