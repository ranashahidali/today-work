<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('students_id');
            $table->string('Name');
            $table->string('Email')->unique()->nullable();
            $table->float('Percentage',3,2)->comment('its percentage of students');
            $table->string('City',30)->default('No City');
            $table->integer('Age',30)->unsigned();
            $table->primary('students_data');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
