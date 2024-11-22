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
            'phone' => '0282521120',
            'email' => 'sidanegara2.cilteng@gmail.com',
            'address' => 'Jl. Argopuro No.425, Tambaksari, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53223',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
