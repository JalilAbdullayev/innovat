<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('settings_translate', function(Blueprint $table) {
            $table->id();
            $table->unsignedInteger('settings_id');
            $table->string('title');
            $table->string('author');
            $table->text('keywords');
            $table->text('description');
            $table->string('lang');
            $table->timestamps();
        });
        Schema::table('settings', function(Blueprint $table) {
            $table->dropColumn(['title', 'author', 'keywords', 'description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('settings_translate');
    }
};
