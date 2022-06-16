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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->foreign('username')->references('name')->on('users');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('gender');
            $table->longText('address');
            $table->date('birthdate');
            $table->string('contact_number');
            $table->string('civilstatus');
            $table->string('email');
            $table->string('educattain');
            $table->string('resume');
            $table->string('position');
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
        Schema::dropIfExists('applications');
        
    }
};
