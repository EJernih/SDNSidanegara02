<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Selamat Datang di SD Negeri Sidanegara 02 Cilacap',
                'description' => 'SD Negeri Sidanegara 02 Cilacap merupakan salah satu sekolah yang berada di Kecamatan Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah.',
                'image' => 'WhatsApp Image 2024-10-25 at 08.24.21.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Segera daftarkan ananda di SD Negeri Sidanegara 02 Cilacap',
                'description' => 'Hubungi kami untuk mendapatkan informasi lebih lanjut.',
                'image' => 'WhatsApp Image 2024-10-25 at 08.26.02.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
