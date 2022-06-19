<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobs_logo')->nullable();
            $table->string('title');
            $table->unsignedInteger('dept_id');
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('department');
            $table->integer('salary');
            $table->longText('qualifications');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
