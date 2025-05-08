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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('app_id');
            $table->string('add_line_1');
            $table->string('pin_code');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('same_as_current');
            $table->string('per_add_line_1')->nullable();
            $table->string('per_pin_code')->nullable();
            $table->string('per_city')->nullable();
            $table->string('per_district')->nullable();
            $table->string('per_state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
