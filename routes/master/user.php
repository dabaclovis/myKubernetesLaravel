<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\ArticleController;


Route::prefix('users')->group(function() {
    Route::controller(HomeController::class)->group(fn() =>[
        Route::get('home','index')->name('home'),
        Route::get('profile','profile')->name('users.profile'),
        Route::get('setting','setting')->name('users.setting'),
        Route::post('upload','uploadAvatar')->name('uploadavatar'),
    ]);

    Route::resources([
        'articles' => ArticleController::class,
        'contacts' => ContactsController::class,
    ]);
});
