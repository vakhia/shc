<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('staff_id');
            $table->string('disease_name');
            $table->string('description');
            $table->string('appointment');
            $table->timestamps();

            $table->index('user_id','treatments_user_idx');
            $table->index('hospital_id','treatments_hospital_idx');
            $table->index('staff_id','treatments_staff_idx');

            $table->foreign('user_id','treatments_user_fk')->on('users')->references('id');
            $table->foreign('hospital_id','treatments_hospital_fk')->on('hospitals')->references('id');
            $table->foreign('staff_id','treatments_staff_fk')->on('staff')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatments');
    }
}
