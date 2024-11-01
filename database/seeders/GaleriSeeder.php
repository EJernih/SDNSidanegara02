<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Galeri::create([
            'id'=> 7,
            'title' => 'Galeri 1',
            'filter' => 'potrait',
            'image' => 'assets/img/b7.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
