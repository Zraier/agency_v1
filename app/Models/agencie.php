<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agencie extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_agence';

    public static function findByUsername($username)
    {
        return self::where('username', $username)->first();
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
