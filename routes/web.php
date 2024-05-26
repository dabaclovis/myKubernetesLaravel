<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(PagesController::class)->group(function(){
    Route::get('/','index')->name('pages.index');
    Route::get('about','about')->name('pages.about');
    Route::get('resume','resume')->name('pages.resume');
});

Route::prefix('authenticator')->group(fn() => [
    Route::post('logination', [LoginController::class,'logination'])->name('gateman'),
    Route::post('registration', [RegisterController::class,'HandledRegistration'])->name('users.registration'),
]);

Route::prefix('admins')->group(function() {
    Route::controller(AdminsController::class)->group(fn() =>[
        Route::get('dashboard','index')->name('admins.index'),
    ]);
});

Route::prefix('users')->group(function() {
    Route::controller(HomeController::class)->group(fn() =>[
        Route::get('home','index')->name('home'),
    ]);
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
