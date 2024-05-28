<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprise extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_ent';

    public function domaine()
    {
        return $this->belongsTo(Domaine::class, 'id_dom');
    }

     public function user()
    {
        return $this->hasOne(User::class, 'username', 'username');
    }

}
