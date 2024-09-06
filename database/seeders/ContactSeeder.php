<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\ContactTranslate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        ContactTranslate::create([
            'address' => 'Baku',
            'contact_id' => Contact::first()->id,
            'lang' => 'az'
        ]);
        ContactTranslate::create([
            'address' => 'Baku',
            'contact_id' => Contact::first()->id,
            'lang' => 'en'
        ]);
        ContactTranslate::create([
            'address' => 'Baku',
            'contact_id' => Contact::first()->id,
            'lang' => 'ru'
        ]);
    }
}
