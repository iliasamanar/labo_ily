<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pharmacies = [
            ['name' => 'Pharmacy Casablanca', 'address' => '123 Main St, Casablanca', 'phone' => '0612345678', 'city_id' => 1],
            ['name' => 'Pharmacy Rabat', 'address' => '456 Elm St, Rabat', 'phone' => '0623456789', 'city_id' => 2],
            ['name' => 'Pharmacy Marrakech', 'address' => '789 Palm Ave, Marrakech', 'phone' => '0634567890', 'city_id' => 3],
        ];

        DB::table('pharmacies')->insert($pharmacies);
    }
}
