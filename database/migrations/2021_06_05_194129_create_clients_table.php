<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('emailClient');
            $table->string('passwordClient');
            $table->string('nameClient');
            $table->string('surnamedClient');
            $table->string('identificationClient');
            $table->string('carClient');
            $table->string('phoneClient');
            $table->string('profilePictureClient');
            $table->string('genderClient');
            $table->string('latitudeClient');
            $table->string('longitudeClient');
            $table->unsignedBigInteger('idCity');
            $table->foreign('idCity')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::dropIfExists('clients');
    }
}
