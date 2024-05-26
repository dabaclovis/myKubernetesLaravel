<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;

Route::controller(PagesController::class)->group(function(){
    Route::get('/','index')->name('pages.index');
    Route::get('about','about')->name('pages.about');
    Route::get('resume','resume')->name('pages.resume');
});
