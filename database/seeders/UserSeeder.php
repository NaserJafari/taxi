<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'firstname' => 'testuser',
                'lastname' => 'testuser',
                'email' => 'testuser@gmail.com',
                'phone' => '1234567890',
                'password' => Hash::make('testuser'),
            ],
            [
                'firstname' => 'gebruiker',
                'lastname' => 'gebruiker',
                'email' => 'gebruiker@gmail.com',
                'phone' => '1234567890',
                'password' => Hash::make('gebruiker'),
            ],
        ]);
    }
}