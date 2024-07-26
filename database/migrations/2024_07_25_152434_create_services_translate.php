<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('services_translate', function(Blueprint $table) {
            $table->id();
            $table->unsignedInteger('service_id');
            $table->string('title');
            $table->string('slug');
            $table->text('text');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('lang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('services_lang');
    }
};
