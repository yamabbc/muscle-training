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
        Schema::create('training_images', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->foreignId('training_id')->nullable()->constrained();
            $table->string('path')->nullable(false);
            $table->integer('sort')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_images');
    }
};
