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
        Schema::create('barcode_allocations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manufacturer_id');
            $table->foreign('manufacturer_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('distributor_id');
            $table->foreign('distributor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('dealer_id')->nullable();
            $table->foreign('dealer_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('barcode_id');
            $table->foreign('barcode_id')->references('id')->on('barcodes')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['allocated', 'unallocated'])->default('unallocated');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barcode_allocations');
    }
};
