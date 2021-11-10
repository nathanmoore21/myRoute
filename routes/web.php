<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/register', [RegisterController::class, 'register']);

Route::get('/profile', [ProfileController::class, 'profile']);


// Route::get('about', 'App\Http\Contollers\AboutController@about');
// Route::get('login', 'App\Http\Contollers\LoginController@login');
// Route::get('register', 'App\Http\Contollers\RegisterController@register');
// Route::get('profile', 'App\Http\Contollers\ProfileController@profile');

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

