<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->dateTime('application_date');
            $table->dateTime('scheduling_date');
            $table->double('pre_charge', 8, 2);

            $table->foreignId('mechanic_id')->constrained('users');
            $table->foreignId('client_id')->constrained('users');
            $table->foreignId('type_service_id')->constrained('type_services');

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
        Schema::dropIfExists('services');
    }
}
