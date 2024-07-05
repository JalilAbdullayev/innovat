<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Contact::create([
            'work_hours' => '08:00 - 18:00',
            'address' => 'Baku',
            'phone' => '+994101234567',
            'email' => 'mail@example.com',
        ]);
    }
}
