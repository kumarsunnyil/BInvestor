<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('stock_id');
            $table->integer('companies_id');
            $table->string('price');
            $table->integer('cities_id');
            $table->string('currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_stocks');
    }
}
