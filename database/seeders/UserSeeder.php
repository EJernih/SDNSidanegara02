<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan firstOrCreate dengan kondisi dan data yang akan dibuat
        $SuperAdmin = User::firstOrCreate([
            'email' => 'sidanegara2.cilteng@gmail.com'
        ], [
            'name' => 'sdnsidanegara',
            'password' => Hash::make('sdn02')
        ]);
        $SuperAdmin->assignRole('SuperAdmin');

        $Admin = User::firstOrCreate([
            'email' => 'jernih2004@gmail.com'
        ], [
            'name' => 'Jernih',
            'password' => Hash::make('2004')
        ]);
        $Admin->assignRole('Admin');
    }
}
