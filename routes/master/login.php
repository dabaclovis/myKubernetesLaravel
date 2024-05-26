<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::prefix('authenticator')->group(fn() => [
    Route::post('logination', [LoginController::class,'logination'])->name('gateman'),
    Route::post('registration', [RegisterController::class,'HandledRegistration'])->name('users.registration'),
]);
