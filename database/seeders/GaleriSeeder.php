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
            'filter_id' => 1,
            'image' => 'galeri_202410310431031wNPqhFG.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
