<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WineType;

class WineTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WineType::create([
            'type' => 'Merlot'
        ]);

        WineType::create([
            'type' => 'Souvignot Blanc'
        ]);

        WineType::create([
            'type' => 'Rozé'
        ]);

        WineType::create([
            'type' => 'Reduktív rozé'
        ]);

        WineType::create([
            'type' => 'Kékfrankos'
        ]);

        WineType::create([
            'type' => 'Leányka'
        ]);

        WineType::create([
            'type' => 'Champagne'
        ]);
    }
}
