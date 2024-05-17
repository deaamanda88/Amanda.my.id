<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username'=>'amanda',
                'name'=>'amanda',
                'email'=>'amanda@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('amanda123')
            ],
            
            [
                'username'=>'user',
                'name'=>'AkunUser',
                'email'=>'user@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('user123')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
