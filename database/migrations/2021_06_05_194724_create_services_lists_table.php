<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_lists', function (Blueprint $table) {
            $table->id();
            $table->decimal('costServicesList', 18, 2);
            $table->boolean('statusServicesList');
            $table->unsignedBigInteger('idMechanic');
            $table->foreign('idMechanic')->references('id')->on('mechanics')->onDelete('cascade');
            $table->unsignedBigInteger('idService');
            $table->foreign('idService')->references('id')->on('services')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_lists');
    }
}
