<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'S U',
            'username' => 'su',
            'email' => 'su@email.com',
            'user_role' => 1,
            'password' => Hash::make(123),
        ]);
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@email.com',
            'user_role' => 2,
            'password' => Hash::make(123),
        ]);
        User::create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@email.com',
            'user_role' => 3,
            'password' => Hash::make(123),
        ]);
    }
}
