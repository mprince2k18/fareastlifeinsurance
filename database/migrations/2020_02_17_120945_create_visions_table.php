<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->longText('details')->default("No_data")->nullable();
          $table->string('one')->default("No_data")->nullable();
          $table->string('two')->default("No_data")->nullable();
          $table->string('three')->default("No_data")->nullable();
          $table->string('four')->default("No_data")->nullable();
          $table->string('five')->default("No_data")->nullable();
          $table->string('six')->default("No_data")->nullable();
          $table->string('seven')->default("No_data")->nullable();
          $table->string('eight')->default("No_data")->nullable();
          $table->string('nine')->default("No_data")->nullable();
          $table->string('ten')->default("No_data")->nullable();
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
        Schema::dropIfExists('visions');
    }
}
