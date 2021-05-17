<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobTehsil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_job_tehsil', function (Blueprint $table) {
            $table->bigIncrements('tehsil_id');
            $table->integer('district_id');
            $table->string('tehsil_name');
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
        Schema::dropIfExists('tbl_job_tehsil');
    }
}
