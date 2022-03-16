<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_medicines', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('treatment_id');
            $table->unsignedBigInteger('medicine_id');

            $table->index('treatment_id','tm_treatment_idx');
            $table->index('medicine_id','tm_medicine_idx');

            $table->foreign('treatment_id','tm_treatment_fk')->on('treatments')->references('id');
            $table->foreign('medicine_id','tm_medicine_fk')->on('medicines')->references('id');

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
        Schema::dropIfExists('treatment_medicines');
    }
}
