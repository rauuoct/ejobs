<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobTrainingCenter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_training_center')) {
            Schema::create('tbl_job_training_center', function (Blueprint $table) {
                $table->bigIncrements('training_center_id');

                $table->integer('user_id');
                $table->string('training_title', 35);
                $table->string('description', 35);
                $table->string('training_type', 30);
                $table->string('timing', 35);
                $table->string('duration', 35);
                $table->integer('town_id');
                $table->string('location', 35);
                $table->integer('training_cost');
                $table->boolean('is_paid');
                $table->string('eligibility_criteria', 35);
                $table->tinyInteger('no_positions');
                $table->string('week_days', 35);

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
        Schema::dropIfExists('tbl_job_training_center');
    }
}
