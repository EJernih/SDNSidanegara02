<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kontak::create([
            'id' => 2,
            'phone' => '081234567890',
            'email' => 'kontak@email.com',
            'address' => 'Jl. Kebon Sirih No. 123',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
