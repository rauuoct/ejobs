<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobEmployeeAchievement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_employee_achievement')) {
            Schema::create('tbl_job_employee_achievement', function (Blueprint $table) {
                $table->bigIncrements('employee_achievement_id');
                $table->integer('employee_id');
                $table->string('achievement_name', 35);
                $table->string('future_vision', 35);
                $table->string('hobbies', 35);
                $table->integer('language_id');
                $table->string('proficiency', 35);
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
        Schema::dropIfExists('tbl_job_employee_achievement');
    }
}
