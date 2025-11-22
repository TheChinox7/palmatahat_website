<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('currency_code', 16)->nullable();
            $table->string('currency_symbol', 8)->nullable();
            $table->string('phone_country_code', 8)->nullable();
            $table->string('phone_number', 32)->nullable();
            $table->json('social_links')->nullable(); // [{icon:"fab fa-facebook-f", url:"..."}, ...]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};