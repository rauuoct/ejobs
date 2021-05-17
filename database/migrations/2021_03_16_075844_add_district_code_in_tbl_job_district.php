<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDistrictCodeInTblJobDistrict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_job_district', function (Blueprint $table) {
            $table->tinyInteger('district_code', false, false)->after('district_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_job_district', function (Blueprint $table) {
            $table->tinyInteger('district_code', false, false)->after('district_name');
        });
    }
}
