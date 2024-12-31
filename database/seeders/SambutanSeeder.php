<?php

namespace Database\Seeders;

use App\Models\Sambutan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sambutan::create([
            'id' => '3',
            'image' => 'WhatsApp Image 2024-10-25 at 09.09.20.jpeg',
            'description' => 'Selamat datang di website resmi SD Negeri Sidanegara 02 Cilacap',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
