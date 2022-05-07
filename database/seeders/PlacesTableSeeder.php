<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'name'=> 'Eger'
        ]);
        Place::create([
            'name'=> 'Szekszárd'
        ]);
        Place::create([
            'name'=> 'Tokaj'
        ]);
        Place::create([
            'name'=> 'Egyed'
        ]);
        Place::create([
            'name'=> 'Ecsek'
        ]);
        Place::create([
            'name'=> 'Arló'
        ]);
        Place::create([
            'name'=> 'Szomolya'
        ]);
    }
}
