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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_meta_desc');
            $table->string('site_logo')->nullable();
            $table->string('site_domine')->nullable();
            $table->string('site_icon')->nullable();
            $table->tinyText('about')->default("درباره سایت خود توضیحاتی درج کنید ");
            $table->tinyText('address')->nullable();
            $table->tinyText('phone')->nullable();
            $table->tinyText('tellphone')->nullable();
            $table->tinyText('tellphone1')->nullable();
            $table->tinyText('cellphone')->nullable();
            $table->tinyText('fax')->nullable();
            $table->tinyText('telegram')->nullable();
            $table->tinyText('instagram')->nullable();
            $table->tinyText('whatsapp')->nullable();
            $table->tinyText('aparat')->nullable();
            $table->tinyText('robika')->nullable();
            $table->tinyText('eita')->nullable();
            $table->tinyText('bale')->nullable();
            $table->tinyText('linkdin')->nullable();
            $table->tinyText('towiter')->nullable();
            $table->tinyText('facebook')->nullable();
            $table->json('setinng_json');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
