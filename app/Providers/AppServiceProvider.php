<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        $settings = Settings::firstOrFail();
        $contact = Contact::firstOrFail();

        View::share('settings', $settings);
        View::share('contact', $contact);
    }
}
