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
            'nama' => 'Dwi Handini Susetyaningsih, S.Pd SD',
            'pelajaran' => 'Kepala Sekolah',
            'image' => 'WhatsApp Image 2024-10-25 at 09.09.20.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
