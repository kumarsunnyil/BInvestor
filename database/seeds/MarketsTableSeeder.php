<?php

use Illuminate\Database\Seeder;

class MarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $markets = new \App\Markets([
            'name' => 'New York Stock Exchange',
        ]);

        $markets->save();
        $markets = new \App\Markets([
            'name' => 'Hong Kong Stock Exchange',
        ]);
        $markets->save();

        $markets = new \App\Markets([
            'name' => 'Deutsche Borse Frankfurt',
        ]);
        $markets->save();

        $markets = new \App\Markets([
            'name' => 'London Stock Exchange',
        ]);
        $markets->save();

        $markets = new \App\Markets([
            'name' => 'Shanghai Stock Exchange',
        ]);
        $markets->save();


    }
}
