<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('careerId');
            $table->string('fName');
            $table->string('lName');
            $table->string('email');
            $table->string('phone');
            $table->longText('address');
            $table->string('city');
            $table->integer('countryId');
            $table->integer('stateId');
            $table->string('companyName');
            $table->string('pTitle');
            $table->string('skills');
            $table->string('university');
            $table->string('degree');
            $table->string('grade');
            $table->string('resume');
            $table->string('photo');
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
        Schema::dropIfExists('career_applications');
    }
}
