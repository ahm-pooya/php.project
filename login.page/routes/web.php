<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\controllers\logincontroller@indexlogin');

Route::post('/login', 'App\Http\controllers\logincontroller@storelogin');

Route::get('/page', 'App\Http\controllers\logincontroller@showlogin');

Route::get('/signup', 'App\Http\controllers\logincontroller@indexsignup');

Route::post('/signup', 'App\Http\controllers\logincontroller@storesignup');

Route::get('/detail', 'App\Http\controllers\logincontroller@showsignup');

