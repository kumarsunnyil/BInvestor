<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new \App\City([
            'name'=>'New York'
        ]);
        $city->save();

        $city = new \App\City([
            'name'=>'Hong Kong'
        ]);
        $city->save();

        $city = new \App\City([
            'name'=>'Frankfurt'
        ]);
        $city->save();
    }
}
