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
        Schema::create('my_cases', function (Blueprint $table){
            $table->id();
            $table->string('Category');
            $table->string('Title');
            $table->text('Intro');
            $table->text('Signs');
            $table->text('Treatment_Procedures');
            $table->text('Prevention_Tips');
            $table->text('Photo');  
            $table->text('Video');
            $table->timestamps();
        });
		
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_cases');
    }
};
