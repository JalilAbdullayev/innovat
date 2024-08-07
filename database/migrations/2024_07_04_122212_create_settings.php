<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('settings', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('keywords');
            $table->string('author');
            $table->string('logo');
            $table->string('favicon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('settings');
    }
};
