<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_staff', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('staff_id');
            $table->timestamps();

            $table->index('hospital_id', 'hs_hospital_idx');
            $table->index('staff_id', 'hs_staff_idx');

            $table->foreign('hospital_id', 'hs_hospital_fk')->on('hospitals')->references('id');
            $table->foreign('staff_id', 'hs_staff_fk')->on('staff')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_staff');
    }
}
