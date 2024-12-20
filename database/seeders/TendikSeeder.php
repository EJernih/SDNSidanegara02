<?php

namespace Database\Seeders;

use App\Models\Tendik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TendikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tendik::create([
            'id' => 3,
            'nama' => 'Purboyo',
            'pelajaran' => 'Matematika',
            'image' => 'tendik_2024103114323226OJZbBx.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
