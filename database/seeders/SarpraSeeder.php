<?php

namespace Database\Seeders;

use App\Models\Sarpra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SarpraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sarpra::create([
            'id' => 9,
            'judul' =>'wc',
            'jumlah' => 10,
            'deskripsi' =>'Deskripsi Sarpra 8',
            'image' => 'assets/img/g13.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
