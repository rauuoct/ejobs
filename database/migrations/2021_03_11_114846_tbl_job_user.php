<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJobUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_job_user')) {
            Schema::create('tbl_job_user', function (Blueprint $table) {
                $table->bigIncrements('user_id');

                $table->string('name', 255);
                $table->string('email', 200);
                $table->dateTime('email_verified_at');
                $table->string('password', 255);
                $table->string('remember_token', 100);
                $table->tinyInteger('is_active');

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
        Schema::dropIfExists('tbl_job_user');
    }
}
