<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prestasi::create([
            'id' => 3,
            'title' => 'Juara 1 Lomba Basket Bola',
            'date' => '2021-05-10',
            'description' => 'Juara 1 Lomba Basket Bola di SMK Telkom Bandung',
            'image' => 'prestasi_20241031115117ZoIb2LA5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
