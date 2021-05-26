<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table){
        $table->id();
        $table->string('name');
        $table->string('address');
        $table->string('phone');
        $table->time('starting_hour');
        $table->time('ending_hour');
        $table->boolean("available");
        $table->foreignId('salon_id')->references('id')->on('saloons');     
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
        //
        Schema::dropIfExists('employees');
    }
}
