<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_examinations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('hospital_id');
            $table->string('title');
            $table->string('description');
            $table->timestamps();

            $table->index('appointment_id','me_appointment_idx');
            $table->index('user_id','me_user_idx');
            $table->index('staff_id','me_staff_idx');
            $table->index('hospital_id','me_hospital_idx');

            $table->foreign('appointment_id','me_appointment_fk')->on('appointments')->references('id');
            $table->foreign('user_id','me_user_fk')->on('users')->references('id');
            $table->foreign('staff_id','me_staff_fk')->on('users')->references('id');
            $table->foreign('hospital_id','me_hospital_fk')->on('hospitals')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_examinations');
    }
}
