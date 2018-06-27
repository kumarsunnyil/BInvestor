<?php

use Illuminate\Database\Seeder;

class CompanyStockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compStock = new \App\CompanyStock([

            'name'=>'Kiveo Ag',
            'stock_id'=>1,
            'companies_id'=>1,
            'price'=>'12.69',
            'cities_id'=>1,
            'currency'=>'$',
        ]);
        $compStock->save();
        $compStock = new \App\CompanyStock([

            'name'=>'Kiveo Ag',
            'stock_id'=>1,
            'companies_id'=>2,
            'cities_id'=>2,
            'price'=>'11.00',
            'currency'=>'$',
        ]);

        $compStock->save();
        $compStock = new \App\CompanyStock([

            'name'=>'Metadeo Ag',
            'stock_id'=>2,
            'companies_id'=>1,
            'cities_id'=>3,
            'price'=>'15.00',
            'currency'=>'$',
        ]);
        $compStock->save();
    }
}
