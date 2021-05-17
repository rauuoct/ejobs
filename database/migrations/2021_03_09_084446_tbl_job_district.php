<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobDistrict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_job_district', function (Blueprint $table) {
            $table->bigIncrements('district_id');
            $table->integer('province_id');
            $table->string('district_name');
            $table->dateTime('created_at');
            $table->integer('created_by');
            $table->dateTime('updated_at');
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_job_district');
    }
}
