<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_emp';

    public function entreprise()
    {
        return $this->belongsTo(entreprise::class, 'id_ent');
    }
    public static function findByUsername($username)
    {
        return self::where('username', $username)->first();
    }
     public function user()
    {
        return $this->hasOne(User::class, 'username', 'username');
    }
}
