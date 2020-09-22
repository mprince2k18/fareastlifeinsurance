<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairmen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('chairman_message');
            $table->string('position');
            $table->string('circle_photo')->nullable();
            $table->string('square_photo')->nullable();
            $table->string('long_photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('qr_code')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('chairmen');
    }
}
