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
        Schema::create('car_specs', function (Blueprint $table) {
            $table->string('app_id');
            $table->id();
            $table->enum('claim', ['yes', 'no']);
            $table->string('make');
            $table->string('model');
            $table->string('registartion_year');
            $table->string('fuel_type');
            $table->string('variant');
            $table->date('insurance_till');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_specs');
    }
};
