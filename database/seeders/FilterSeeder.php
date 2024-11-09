<?php

namespace Database\Seeders;

use App\Models\Filter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filter::create([
            'id' => 1,
            'filter' => 'Potrait',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
