<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobEmployer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_employer')) {
            Schema::create('tbl_job_employer', function (Blueprint $table) {
                $table->bigIncrements('job_employer_id');
                $table->unsignedInteger('user_id');
                $table->unsignedInteger('status_business');
                $table->string('full_name', 50);
                $table->string('owner_name', 50);
                $table->string('cnic', 14);
                $table->unsignedInteger('contact_no');
                $table->date('dob');
                $table->unsignedInteger('industry_id');
                $table->unsignedInteger('town_id');
                $table->string('location', 100);
                $table->text('description');
                $table->string('email', 50);
                $table->string('website', 50);
                $table->year('operation_since');
                $table->dateTime('created_at');
                $table->unsignedInteger('created_by');
                $table->dateTime('updated_at');
                $table->unsignedInteger('updated_by');
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
        Schema::dropIfExists('tbl_job_employer');
    }
}
