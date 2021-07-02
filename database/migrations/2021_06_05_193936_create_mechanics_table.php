<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMechanicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanics', function (Blueprint $table) {
            $table->id();
            $table->string('emailMechanic');
            $table->string('passwordMechanic');
            $table->string('nameMechanic');
            $table->string('surnameMechanic');
            $table->string('identificationMechanic');
            $table->string('phoneMechanic');
            $table->string('profilePictureMechanic');
            $table->string('genderMechanic');
            $table->string('latitudeMechanic');
            $table->string('longitudeMechanic');
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
        Schema::dropIfExists('mechanics');
    }
}
