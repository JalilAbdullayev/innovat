<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('privacy_translate', function(Blueprint $table) {
            $table->id();
            $table->unsignedInteger('privacy_id');
            $table->string('title');
            $table->text('text');
            $table->string('lang');
            $table->timestamps();
        });
        Schema::table('about', function(Blueprint $table) {
            $table->dropColumn(['text']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('privacy_translates');
    }
};
