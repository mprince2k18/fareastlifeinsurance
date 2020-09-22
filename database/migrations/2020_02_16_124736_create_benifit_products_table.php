<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenifitProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benifit_products', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('product_id');
          $table->string('title');
          $table->longText('dis');
          $table->string('titleBan');
          $table->longText('disBan');
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
        Schema::dropIfExists('benifit_products');
    }
}
