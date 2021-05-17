<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobEmployeeSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_employee_skill')) {
            Schema::create('tbl_job_employee_skill', function (Blueprint $table) {
                $table->bigIncrements('employee_skill_id');
                $table->integer('employee_id');
                $table->tinyInteger('skill_id', false, true);
                $table->tinyInteger('skill_level_id', false, true);
                $table->text('skill_summary');
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
        Schema::dropIfExists('tbl_job_employee_skill');
    }
}
