<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_post')) {
            Schema::create('tbl_job_post', function (Blueprint $table) {
                $table->bigIncrements('post_id');
                $table->integer('type_id');
                $table->string('position_title', 35);
                $table->unsignedInteger('working_day_hours');
                $table->text('candidate_required');
                $table->string('experience', 50);
                $table->unsignedInteger('skill_id');
                $table->unsignedInteger('no_positions');
                $table->string('job_location', 50);
                $table->unsignedInteger('job_type_id');
                $table->unsignedInteger('gender_id');
                $table->unsignedTinyInteger('age_limit');
                $table->string('salary_range', 20);
                $table->string('stipend', 20);
                $table->string('duration', 20);
                $table->date('apply_date');
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
        Schema::dropIfExists('tbl_job_post');
    }
}
