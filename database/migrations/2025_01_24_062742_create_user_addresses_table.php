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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('province_id');
            $table->bigInteger('citie_id');



            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('title');
            $table->string('address');
            $table->string('cellphone');
            $table->string('postal_code');


            $table->unsignedBigInteger('langitude');
            $table->unsignedBigInteger('latitude');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
