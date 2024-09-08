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
        Schema::create('sport_types', function (Blueprint $table) {
            $table->id();
            $table->string('sport_type');
            $table->string('sport_image')->nullable();
            $table->string('sport_desc')->default('No description available');
            $table->timestamps();
            $table->softDeletes(); // soft Delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_types');
    }
};
