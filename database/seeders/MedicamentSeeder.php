<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicaments')->insert([
            [
                'name' => 'Paracetamol',
                'labo_name' => 'Sanofi',
                'description' => 'Used to treat pain and fever.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ibuprofen',
                'labo_name' => 'Pfizer',
                'description' => 'Anti-inflammatory drug for pain and swelling.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amoxicillin',
                'labo_name' => 'GlaxoSmithKline',
                'description' => 'Antibiotic used to treat bacterial infections.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aspirin',
                'labo_name' => 'Bayer',
                'description' => 'Used to reduce pain, fever, or inflammation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Omeprazole',
                'labo_name' => 'AstraZeneca',
                'description' => 'Used to treat acid reflux and ulcers.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
