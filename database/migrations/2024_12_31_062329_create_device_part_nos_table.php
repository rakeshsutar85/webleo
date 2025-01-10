<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('device_part_nos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('element_id')->nullable();
            $table->foreign('element_id')->nullable()->references('id')->on('elements')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->nullable()->references('id')->on('element_types')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('model_id')->nullable();
            $table->foreign('model_id')->nullable()->references('id')->on('device_model_nos')->onUpdate('cascade')->onDelete('cascade');
            $table->string('part_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_part_nos');
    }
};