<?php

namespace Database\Seeders;

use App\Models\Ppdb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ppdb::create([
            'id' => 3,
            'title' => 'Pendaftaran Siswa Baru',
            'description' => 'Pendaftaran Siswa Baru Tahun Ajaran 2021/2022',
            'start_date' => '2021-12-31',
            'end_date' => '2022-06-30',
            'place'=> 'SMK Jernih',
            'sk_1' => 'skss',
            'sk_2' => 'sk',
            'sk_3'=> 'vaksin',
            'sk_4' => 'form',
            'image' => 'assets/img/ppdb.jpg',
            'created_at' => '2021-12-31 10:00:00',
            'updated_at' => '2021-12-31 10:00:00',
        ]);
    }
}
