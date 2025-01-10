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
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('dealer_id');
            $table->foreign('dealer_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('business_name');    
            $table->string('gender');
            $table->string('email');
            $table->string('mobile');
            $table->string('aadhar');
            $table->string('dob');
            $table->string('qualification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technicians');
    }
};
