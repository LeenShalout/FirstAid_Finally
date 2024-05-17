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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('MainTitle');
            $table->string('Title');
            $table->string('Category');
            $table->text('Summary');
            $table->text('Intro');
            $table->text('Steps');
            $table->text('MainImg');
            $table->text('Photo')->nullable();
            $table->text('Conclusion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
