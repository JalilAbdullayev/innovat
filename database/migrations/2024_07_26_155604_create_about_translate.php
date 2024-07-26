<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('about_translate', function(Blueprint $table) {
            $table->id();
            $table->unsignedInteger('about_id');
            $table->string('title');
            $table->text('text');
            $table->string('lang');
            $table->timestamps();
        });
        Schema::table('about', function(Blueprint $table) {
            $table->dropColumn(['text', 'title']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('about_translate');
    }
};
