<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AboutTranslate;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        About::create([
            'image' => 'innovat.png',
        ]);
        AboutTranslate::create([
            'about_id' => About::first()->id,
            'title' => 'Innovat',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'lang' => 'az'
        ]);
        AboutTranslate::create([
            'about_id' => About::first()->id,
            'title' => 'Innovat',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'lang' => 'en'
        ]);
        AboutTranslate::create([
            'about_id' => About::first()->id,
            'title' => 'Innovat',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'lang' => 'ru'
        ]);
    }
}
