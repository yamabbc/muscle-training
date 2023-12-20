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
            $table->integer('training_id')->nullable(false);
            $table->string('path')->nullable(false);
            $table->integer('sort')->nullable(false);
            $table->timestamp('updated_at')->useCurrent()->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable(false);
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
