<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMedicalExaminationIdColumnToTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treatments', function (Blueprint $table) {
            $table->unsignedBigInteger('medical_examination_id')->default(1)->after('staff_id');

            $table->index('medical_examination_id', 'treatments_me_idx');

            $table->foreign('medical_examination_id', 'treatments_me_fk')->on('medical_examinations')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('treatments', function (Blueprint $table) {
            $table->dropColumn('medical_examination_id');
        });
    }
}
