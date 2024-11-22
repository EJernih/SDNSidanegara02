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
        User::factory()->create([
            'name' => 'sdnsidanegara',
            'email' => 'sidanegara2.cilteng@gmail.com',
            'password' => Hash::make('sdn02')
        ]);
        User::factory()->create([
            'name' => 'Jernih',
            'email' => 'jernih2004@gmail.com',
            'password' => Hash::make('2004')
        ]);
    }
}
