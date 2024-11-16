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
            'image' => 'sambutan_20241023142455nyPqSskQ.jpg',
            'description' => 'Selamat datang di website kami, kami adalah sebuah perusahaan yang bergerak di bidang jasa penyedia layanan pendidikan dan pelatihan. Kami menyediakan berbagai macam layanan seperti pendidikan formal, pelatihan, sertifikasi, dan beasiswa. Kami juga menyediakan berbagai macam produk seperti buku, perangkat lunak, dan layanan lainnya. Kami siap melayani anda dengan sepenuh hati.',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
