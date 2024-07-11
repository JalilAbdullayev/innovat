<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('qualities', function(Blueprint $table) {
            $table->string('keywords')->after('title')->nullable();
            $table->string('description')->after('title')->nullable();
            $table->string('slug')->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('qualities', function(Blueprint $table) {
            //
        });
    }
};
