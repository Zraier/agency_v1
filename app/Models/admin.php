<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_admin';
    protected $guarded = [];
    
    public static function findByUsername($username)
    {
        return self::where('username', $username)->first();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'username', 'username');
    }

   

}
