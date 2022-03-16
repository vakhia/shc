<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('phone_number');
            $table->string('message');
            $table->date('date_of_appointment');
            $table->time('time_of_appointment');
            $table->unsignedSmallInteger('revised')->default(1);
            $table->unsignedSmallInteger('done')->default(1);
            $table->timestamps();

            $table->index('hospital_id','appointments_hospital_idx');
            $table->index('staff_id','appointments_staff_idx');
            $table->index('user_id','appointments_user_idx');

            $table->foreign('hospital_id','appointments_hospital_fk')->on('hospitals')->references('id');
            $table->foreign('staff_id','appointments_staff_fk')->on('user')->references('id');
            $table->foreign('user_id','appointments_user_fk')->on('user')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
