<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'usertype' => 'admin',
            'location' => 'Admin Location',
            'store' => 'Admin Store',
            'email_verified_at' => now(),
            'password' => Hash::make('admin1234'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'User@gmail.com',
            'usertype' => 'user',
            'location' => 'User Location',
            'store' => 'User Store',
            'email_verified_at' => now(),
            'password' => Hash::make('user1234'),
        ]);
    }
}

