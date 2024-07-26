<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\SetLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Request as RequestFacade;

$locale = RequestFacade::segment(1);
if(in_array($locale, ['az', 'ru'])) {
    $locale = RequestFacade::segment(1);
} else {
    $locale = '';
}

Route::post('/update-locale', function(Request $request) {
    $locale = $request->input('locale');
    Session::put('locale', $locale);

    return response()->json(['success' => true]);
})->name('update-locale');

Route::get('/', function() {
    return redirect()->route('home_en');
})->name('home_en');

Route::get('/{locale?}', function($locale = null) {
    if($locale === 'en') {
        return redirect()->route('home_en');
    }

    if($locale) {
        Session::put('locale', $locale);
    }

    return redirect()->route('home_' . $locale);
})->where('locale', '[a-zA-Z]{2}');

Route::group(['prefix' => $locale, function($locale = null) {
    return $locale;
}, 'where' => ['locale' => '[a-zA-Z]{2}']], function() {
    Route::controller(FrontController::class)->middleware(SetLocale::class)->group(function() {
        Route::get('home', 'index')->name('home_en');
        Route::get('ana-sehife', 'index')->name('home_az');
        Route::get('glavnaya', 'index')->name('home_ru');


        Route::get('services', 'services')->name('services_en');
        Route::get('xidmetler', 'services')->name('services_az');
        Route::get('uslugi', 'services')->name('services_ru');

        Route::get('service/{slug}', 'service')->name('service_en');
        Route::get('xidmet/{slug}', 'service')->name('service_az');
        Route::get('usluga/{slug}', 'service')->name('service_ru');

        Route::get('quality/{slug}', 'quality')->name('quality_en');
        Route::get('keyfiyyet/{slug}', 'quality')->name('quality_az');
        Route::get('preimushchestvo/{slug}', 'quality')->name('quality_ru');

        Route::get('contact', 'contact')->name('contact_en');
        Route::get('elaqe', 'contact')->name('contact_az');
        Route::get('svyaz', 'contact')->name('contact_ru');

        Route::get('about', 'about')->name('about_en');
        Route::get('haqqimizda', 'about')->name('about_az');
        Route::get('o-nas', 'about')->name('about_ru');

        Route::get('team', 'team')->name('team_en');
        Route::get('komandamiz', 'team')->name('team_az');
        Route::get('nasha-komanda', 'team')->name('team_ru');

        Route::get('privacy', 'privacy')->name('privacy_en');
        Route::get('mexfilik', 'privacy')->name('privacy_az');
        Route::get('konfidentsialnost', 'privacy')->name('privacy_ru');
    });
});

Route::post('sendMessage', [MessageController::class, 'store'])->name('sendMessage');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::prefix('settings')->name('settings')->controller(SettingsController::class)->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'update');
    });

    Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
        Route::get('delete', 'delete')->name('delete');
    });

    Route::prefix('users')->name('users.')->controller(UserController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::prefix('create')->name('create')->group(function() {
            Route::get('/', 'create');
            Route::post('/', 'store');
        });
        Route::prefix('edit/{id}')->name('edit')->group(function() {
            Route::get('/', 'edit');
            Route::post('/', 'update');
        });
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('contact')->name('contact')->controller(ContactController::class)->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'update');
    });

    Route::prefix('about')->name('about')->controller(AboutController::class)->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'update');
    });

    Route::prefix('services')->name('services.')->controller(ServiceController::class)->group(function() {
        Route::get('/', 'index')->name('index');

        Route::prefix('create')->name('create')->group(function() {
            Route::get('/', 'create');
            Route::post('/', 'store');
        });

        Route::prefix('edit/{id}')->name('edit')->group(function() {
            Route::get('/', 'edit');
            Route::post('/', 'update');
        });

        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('qualities')->name('qualities.')->controller(QualityController::class)->group(function() {
        Route::get('/', 'index')->name('index');

        Route::prefix('create')->name('create')->group(function() {
            Route::get('/', 'create');
            Route::post('/', 'store');
        });

        Route::prefix('edit/{id}')->name('edit')->group(function() {
            Route::get('/', 'edit');
            Route::post('/', 'update');
        });

        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('messages')->name('messages.')->controller(MessageController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('message/{id}', 'show')->name('show');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('team')->name('team.')->controller(TeamController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::prefix('create')->name('create')->group(function() {
            Route::get('/', 'create');
            Route::post('/', 'store');
        });
        Route::prefix('edit/{id}')->name('edit')->group(function() {
            Route::get('/', 'edit');
            Route::post('/', 'update');
        });
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('privacy-policy')->name('privacy')->controller(PrivacyController::class)->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'update');
    });

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function() {
        Lfm::routes();
    });
});

Auth::routes();
