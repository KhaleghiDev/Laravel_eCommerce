<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('copunes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('code', 50);
            $table->enum('type', ['amount', 'percentage', 'other']);

            $table->unsignedInteger('amount')->nullable();
            $table->unsignedInteger('percentage')->nullable();
            $table->unsignedInteger('max_percentage_amount')->nullable();
            $table->timestamp('expired_at');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copunes');
    }
};
