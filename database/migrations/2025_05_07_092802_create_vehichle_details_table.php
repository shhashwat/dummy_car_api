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
        Schema::create('vehichle_details', function (Blueprint $table) {
            $table->string('app_id');
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->date('registration_date');
            $table->string('manifacturing_year');
            $table->boolean('purchased_on_loan');
            $table->string('financier_name');
            $table->string('chassis_number');
            $table->string('engine_number');
            $table->string('vehicle_reg_number');
            $table->string('puc_available');
            $table->string('mob_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehichle_details');
    }
};
