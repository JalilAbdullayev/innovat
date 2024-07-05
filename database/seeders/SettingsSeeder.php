<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Settings::create([
            'title' => 'Innovat',
            'description' => 'Innovat',
            'keywords' => 'Innovat',
            'author' => 'Innovat',
            'logo' => 'innovat.png',
            'favicon' => 'innovat.png',
        ]);
    }
}
