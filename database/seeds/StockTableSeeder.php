<?php

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = new \App\Stock([
            'name'=>'Preferred Stock',
            'market_id'=>1,
            'type'=>'preferred_stock',
        ]);
        $stock->save();

        $stock = new \App\Stock([
            'name'=>'Common Stock',
            'market_id'=>2,
            'type'=>'common_stock',
        ]);
        $stock->save();
        $stock = new \App\Stock([
            'name'=>'Common Stock',
            'market_id'=>3,
            'type'=>'common_stock',
        ]);
        $stock->save();

    }
}
