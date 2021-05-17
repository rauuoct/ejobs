<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_employee')) {
            Schema::create('tbl_job_employee', function (Blueprint $table) {
                $table->bigIncrements('employee_id');
                $table->integer('user_id', false, true);
                $table->string('full_name', 35);
                $table->string('email', 35);
                $table->integer('mobile', false, true);
                $table->date('dob');
                $table->integer('age')->nullable();
                $table->year('year', 4);
                $table->integer('gender_id', false, true);
                $table->integer('marital_status', false, true);
                $table->string('father_name', 35);
                $table->integer('account_type', false, true);
                $table->integer('domicile_distrcit_id', false, true);
                $table->integer('occupation_distrcit_id', false, true);
                $table->integer('tehsil_id', false, true);
                $table->integer('town_id', false, true);
                $table->string('address', 100);
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
        Schema::dropIfExists('tbl_job_employee');
    }
}
