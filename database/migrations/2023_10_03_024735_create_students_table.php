<?php

use Illumination\Database\Migration\Migration;
use Illumination\Schema\Migration\Blueprint;
use Illumination\Support\Facades\Schema;

return new class extends Migration
{
     /**
      * Run the migrations.
      */
    public function up()
    { 
        Shema::create('students', function (Blueprint $table) {
           $table->id();
           $table->string('first_name');
           $table->string('last_name');
           $table->string('midle_name')->nullable();
           $table->date('birth_date');
           $table->string('course'); 
           $table->integer('year');
           $table->char('section', 1);
           $table->string('email')->unique();
           $table->timestamps();
       });      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    { 
        Schema::dropIfExists('students');
    }
};S