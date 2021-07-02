<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSchedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_schedulings', function (Blueprint $table) {
            $table->id();
            $table->date('createdDateServiceScheduling');
            $table->date('estimatedServiceScheduling');
            $table->integer('deleteCodeServiceScheduling');
            $table->string('mechanicCommentServiceScheduling');
            $table->string('clientCommentServiceScheduling');
            $table->double('mechanicReputationServiceScheduling',8,2);
            $table->double('clientReputationServiceScheduling',8,2);
            $table->unsignedBigInteger('idClient');
            $table->foreign('idClient')->references('id')->on('clients')->onDelete('cascade');
            $table->unsignedBigInteger('idServicesList');
            $table->foreign('idServicesList')->references('id')->on('services_lists')->onDelete('cascade');
            $table->unsignedBigInteger('idStatusServiceScheduling');
            $table->foreign('idStatusServiceScheduling')->references('id')->on('status_service_schedulings')->onDelete('cascade');
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
        Schema::dropIfExists('service_schedulings');
    }
}
