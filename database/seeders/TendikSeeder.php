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
            'image' => 'assets/img/t1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
