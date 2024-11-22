<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Akun::create([
            'username' => 'coba',
            'email' => 'coba@coba.com',
            'password' => bcrypt('password')
            ]);

    }
}
