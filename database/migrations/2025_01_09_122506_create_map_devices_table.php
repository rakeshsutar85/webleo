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
        Schema::create('map_devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('state')->nullable();
            $table->unsignedBigInteger('distributor_id')->nullable();
            $table->foreign('distributor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('dealer_id')->nullable();
            $table->foreign('dealer_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('device_type')->nullable();
            $table->string('device_seriel_no')->nullable();
            $table->string('voltage')->nullable();
            $table->string('element_type')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('accessory')->nullable();
            $table->string('element_id')->nullable();
            $table->string('accessories_type')->nullable();
            $table->string('element_model')->nullable();
            $table->string('part')->nullable();
            $table->string('barcode')->nullable();
            $table->string('vehicle_birth')->nullable();
            $table->string('vehicle_registration_number')->nullable();
            $table->string('vehicle_date')->nullable();
            $table->string('vehicle_chassis_no')->nullable();
            $table->string('vehicle_engine_no')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_make_model')->nullable();
            $table->string('vehicle_model_year')->nullable();
            $table->string('vehicle_insurance_renew_date')->nullable();
            $table->string('vehicle_pollution_renew_date')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_mobile')->nullable();
            $table->string('customer_gst_no')->nullable();
            $table->string('customer_state')->nullable();
            $table->string('customer_district')->nullable();
            $table->string('customer_arear')->nullable();
            $table->string('customer_pincode')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_rto_division')->nullable();
            $table->string('customer_aadhaar')->nullable();
            $table->string('customer_pan')->nullable();
            $table->unsignedBigInteger('technician_id')->nullable();
            $table->foreign('technician_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('invoice_no')->nullable();
            $table->string('vehicle_km_reading')->nullable();
            $table->string('driver_license_no')->nullable();
            $table->string('mapped_date')->nullable();
            $table->string('no_of_panic_buttons')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('rc')->nullable();
            $table->string('device')->nullable();
            $table->string('pan')->nullable();
            $table->string('aadhaar')->nullable();
            $table->string('invoice')->nullable();
            $table->string('signature')->nullable();
            $table->string('panic_button')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('map_devices');
    }
};
