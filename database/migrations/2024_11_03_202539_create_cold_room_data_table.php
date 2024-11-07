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
        Schema::create('cold_room_data', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->float('temperature');
            $table->float('humidity');
            $table->integer('co2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cold_room_data');
    }
};
