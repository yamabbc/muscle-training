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
        Schema::create('admins', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->string('name',50)->nullable(false);
            $table->string('email',100)->nullable(false);
            $table->string('password',100)->nullable(false);
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
        Schema::dropIfExists('admins');
    }
};
