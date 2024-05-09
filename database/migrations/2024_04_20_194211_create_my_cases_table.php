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
            $table->string('MainPhoto');
            $table->text('Description');
            $table->string('Category');
            $table->string('Title');
            $table->text('Intro');
            $table->text('Signs')->nullable();
            $table->text('Treatment_Procedures')->nullable();
            $table->text('Prevention_Tips')->nullable();
            $table->text('Before')->nullable();
            $table->text('During')->nullable();
            $table->text('After')->nullable();
            $table->string('Photo');
            $table->string('Video')->nullable();
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
