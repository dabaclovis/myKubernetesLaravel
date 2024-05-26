<?php

use Illuminate\Support\Facades\Auth;


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

require __DIR__. "/master/admin.php";
require __DIR__. "/master/user.php";
require __DIR__. "/master/page.php";
require __DIR__. "/master/login.php";
Auth::routes();


