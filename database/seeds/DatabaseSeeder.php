<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(MarketsTableSeeder::class);
        //$this->call(CompanyTableSeeder::class);
        //$this->call(StockTableSeeder::class);
        $this->call(CompanyStockTableSeeder::class);
        //$this->call(CityTableSeeder::class);
    }
}
