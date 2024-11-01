<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMisi::create([
        'id' => 7,
        'visi' => 'Menjadikan SMK Negeri 1 Kabupaten Bandung sebagai pusat pendidikan dan pelatihan yang berkualitas, berwawasan lingkungan, dan berdaya saing tertinggi.',
        'misi' => 'Meningkatkan kualitas dan kuantitas pembelajaran yang diberikan kepada siswa dengan menggunakan kurikulum yang berorientasi pada kompetensi, kemampuan, sumber belajar, dan keterampilan.',
        'created_at' => now(),
        'updated_at' => now(),
        ]);
    }
}
