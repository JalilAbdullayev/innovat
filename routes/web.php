<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::controller(FrontController::class)->group(function() {
    Route::get('/', 'index')->name('home');
});

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
        Route::get('create', 'create')->name('create');
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

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function() {
        Lfm::routes();
    });
});

Auth::routes();
