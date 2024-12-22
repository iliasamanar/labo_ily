<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Casablanca', 'region' => 'Casablanca-Settat'],
            ['name' => 'Rabat', 'region' => 'Rabat-Salé-Kénitra'],
            ['name' => 'Marrakech', 'region' => 'Marrakech-Safi'],
            ['name' => 'Fes', 'region' => 'Fès-Meknès'],
            ['name' => 'Tangier', 'region' => 'Tanger-Tétouan-Al Hoceïma'],
            ['name' => 'Agadir', 'region' => 'Souss-Massa'],
            ['name' => 'Oujda', 'region' => 'Oriental'],
            ['name' => 'Laayoune', 'region' => 'Laâyoune-Sakia El Hamra'],
        ];

        DB::table('cities')->insert($cities);
    }
}
