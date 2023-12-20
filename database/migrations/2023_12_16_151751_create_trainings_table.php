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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->integer('admin_id')->nullable(false);
            $table->integer('category')->nullable(false);
            $table->string('name',60)->nullable(false);
            $table->text('how')->nullable(false);
            $table->text('effect')->nullable(false);
            $table->text('point')->nullable(false);
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
        Schema::dropIfExists('trainings');
    }
};
