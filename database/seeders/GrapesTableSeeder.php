<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Grape;

class GrapesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grape::create([
            'type' => 'Arany sárfehér',
            'place_id' => '1' 
        ]);

        Grape::create([
            'type' => 'Balafánt',
            'place_id' => '1'
        ]);

        Grape::create([
            'type' => 'Balaton kincse',
            'place_id' => '2'
        ]);

        Grape::create([
            'type' => 'Bálint',
            'place_id' => '3'
        ]);

        Grape::create([
            'type' => 'Beregi sárfehér',
            'place_id' => '4'
        ]);

        Grape::create([
            'type' => 'Bianca',
            'place_id' => '5'
        ]);

        Grape::create([
            'type' => 'Budai zöld',
            'place_id' => '6'
        ]);

        Grape::create([
            'type' => 'Cirfandli',
            'place_id' => '7'
        ]);
        
    }
}
