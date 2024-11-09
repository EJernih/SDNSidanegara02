<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'id' => 7,
            'title' => 'sang',
            'description' => 'ini adalah berita sang',
            'image' => 'berita_20241030112641dRa3Ovva.jpg',
            'created_at' => '2021-10-10 10:00:00',
            'updated_at' => '2021-10-10 10:00:00',
        ]);
    }
}
