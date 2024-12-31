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
        $visimisis = [
            [
                'id' => 1,
                'visi' => 'Mewujudkan Generasi Pelajar Pancasila  yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berkarakter, berakhlak mulia, berprestasi dan berbudaya lingkungan ',
               'misi' => 'Meningkatkan ketaqwaan terhadap Tuhan Yang Maha Esa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'visi' => null,
               'misi' => 'Menumbuhkembangkan kecerdasan spiritual, intelektual, emosional dan sosial peserta didik yang dilandasi nilai-nilai budaya dan karakter bangsa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'visi' => null,
               'misi' => 'Menanamkan sikap- sikap terpuji, membentuk budi pekerti yang luhur sesuai nilai- nilai Pancasila.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'visi' => null,
               'misi' => 'Meningkatkan prestasi akademik dan non akademik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'visi' => null,
               'misi' => 'Mengembangkan bakat dan minat peserta didik melalui program pengembangan diri.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'visi' => null,
               'misi' => 'Membentuk generasi berkarakter yang cinta alam dan berbudaya lingkungan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'visi' => null,
               'misi' => 'Membangun citra sekolah sebagai mitra  yang dipercaya di masayarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($visimisis as $visimisi) {
            VisiMisi::create($visimisi);
        }
    }
}
