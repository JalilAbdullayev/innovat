<?php

namespace Database\Seeders;

use App\Models\Settings;
use App\Models\SettingsTranslate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        SettingsTranslate::create([
            'settings_id' => Settings::firstOrCreate()->id,
            'title' => 'Innovat',
            'description' => 'Innovat',
            'keywords' => 'Innovat',
            'author' => 'Innovat',
            'lang' => 'en'
        ]);
        SettingsTranslate::create([
            'settings_id' => Settings::firstOrCreate()->id,
            'title' => 'Innovat',
            'description' => 'Innovat',
            'keywords' => 'Innovat',
            'author' => 'Innovat',
            'lang' => 'az'
        ]);
        SettingsTranslate::create([
            'settings_id' => Settings::firstOrCreate()->id,
            'title' => 'Innovat',
            'description' => 'Innovat',
            'keywords' => 'Innovat',
            'author' => 'Innovat',
            'lang' => 'ru'
        ]);
    }
}
