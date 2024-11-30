<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Filter;
use App\Models\Prestasi;
use App\Models\Sambutan;
use App\Models\User;
use App\Models\VisiMisi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();




        $this->call([
            BeritaSeeder::class,
            FilterSeeder::class,
            GaleriSeeder::class,
            KontakSeeder::class,
            PpdbSeeder::class,
            PrestasiSeeder::class,
            SambutanSeeder::class,
            SarpraSeeder::class,
            SliderSeeder::class,
            TendikSeeder::class,
            VisiMisiSeeder::class,
            UserSeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}
