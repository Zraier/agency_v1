<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    DB::table('users')->insert([

        //Admin
    [
        
        'username'=>'admin',
        'password'=> Hash::make('123'),
        'role'=> 'admin',
        'status'=>'active'
        
        
    ],

  

]);
    DB::table('admins')->insert([

        //Admin
    [
        'name'=>'slim zraier',
        'username'=>'admin',
        'email'=>'slim.zraier@gmail',
        'phone'=>'51493554',
        'address'=>'Sidi Thabet',
        
        
    ],



]);
        
    }
}
