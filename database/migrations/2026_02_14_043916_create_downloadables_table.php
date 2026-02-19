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
        Schema::create('downloadables', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('url');
            $table->text('category')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestampTz('created_at');
            $table->timestampTz('updated_at');
            $table->softDeletesTz('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downloadables');
    }
};
