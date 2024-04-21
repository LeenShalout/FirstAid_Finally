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
        Schema::create('workshops', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->text('photo');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('E-mail');
            $table->string('workshop_type');
            $table->text('Location');
            $table->string('phone');
            $table->date('register_date'); // Changed to lowercase and underscores for convention
            $table->date('workshop_date'); // Changed to lowercase and underscores for convention
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('my_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
