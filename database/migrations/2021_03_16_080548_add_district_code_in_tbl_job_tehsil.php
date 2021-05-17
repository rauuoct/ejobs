<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDistrictCodeInTblJobTehsil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_job_tehsil', function (Blueprint $table) {
            $table->tinyInteger('tehsil_code', false, false)->after('tehsil_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_job_tehsil', function (Blueprint $table) {
            $table->tinyInteger('tehsil_code', false, false)->after('tehsil_name');
        });
    }
}
