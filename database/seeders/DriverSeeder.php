<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            [
                'firstname' => 'testdriver',
                'lastname' => 'testdriver',
                'email' => 'testdriver@gmail.com',
                'phone' => '1234567890',
                'password' => Hash::make('testdriver'),
            ],
            [
                'firstname' => 'chauffeur',
                'lastname' => 'chauffeur',
                'email' => 'chauffeur@gmail.com',
                'phone' => '1234567890',
                'password' => Hash::make('chauffeur'),
            ],
        ]);
    }
}