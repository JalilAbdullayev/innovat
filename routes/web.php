<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::get('/', function() {
    return view('welcome');
});

Route::prefix('admin')->group(function() {
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function() {
        Lfm::routes();
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
