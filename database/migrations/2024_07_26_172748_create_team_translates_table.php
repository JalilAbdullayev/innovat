<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('team_translate', function(Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('member_id');
            $table->string('name');
            $table->string('position');
            $table->string('lang');
            $table->timestamps();
        });
        Schema::table('team', function(Blueprint $table) {
            $table->string('image')->nullable()->change();
            $table->dropColumn(['name', 'position']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('team_translate');
    }
};
