<?php

namespace Database\Seeders;

use App\Models\Privacy;
use App\Models\PrivacyTranslate;
use Illuminate\Database\Seeder;

class PrivacySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        PrivacyTranslate::create([
            'privacy_id' => Privacy::firstOrCreate()->id,
            'title' => 'Privacy Policy',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'lang' => 'en'
        ]);
        PrivacyTranslate::create([
            'privacy_id' => Privacy::firstOrCreate()->id,
            'title' => 'Политика конфиденциальности',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'lang' => 'ru'
        ]);
        PrivacyTranslate::create([
            'privacy_id' => Privacy::firstOrCreate()->id,
            'title' => 'Məxfilik bəyannaməsi',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'lang' => 'az'
        ]);
    }
}
