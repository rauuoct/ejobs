<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobEmployeeResearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_employee_research_back')) {
            Schema::create('tbl_job_employee_research_back', function (Blueprint $table) {
                $table->bigIncrements('employee_research_id');
                $table->integer('employee_id')->nullable()->unsigned();
                $table->string('research_title', 35);
                $table->string('publication_venue', 35);
                $table->string('publication_link', 35);
                $table->dateTime('created_at');
                $table->integer('created_by')->nullable()->unsigned();
                $table->dateTime('updated_at');
                $table->integer('updated_by')->nullable()->unsigned();
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
        Schema::dropIfExists('tbl_job_employee_research_back');
    }
}
