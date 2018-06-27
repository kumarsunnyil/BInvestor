<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $company = new \App\Company([
            'name' => 'Kiveo AG',
        ]);
        $company->save();

        $company = new \App\Company([
            'name' => 'Metadeo AG',
        ]);
        $company->save();
    }
}
