<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobSkillLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_skill_level')) {
            Schema::create('tbl_job_skill_level', function (Blueprint $table) {
                $table->bigIncrements('skill_level_id');
                $table->string('skill_name', 35);
                $table->dateTime('created_at');
                $table->integer('created_by');
                $table->dateTime('updated_at');
                $table->integer('updated_by');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_job_skill_level');
    }
}
