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
        Schema::create('training_records', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->integer('training_id')->nullable(false);
            $table->date('date')->nullable(false);
            $table->integer('times')->nullable(false);
            $table->integer('weight');
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
        Schema::dropIfExists('training_records');
    }
};
