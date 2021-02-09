<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\SekolahController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/soal', function () {
    return view('navigasi');
});

Route::get('/latihan', function () {
    return view('latihannavigasi');
});

Route::get('/tampiltryout', function () {
    return view('tampiltryout');
});

Route::get('/tryout', function () {
    return view('tryoutnavigasi');
});

Route::get('/sekolah', function () {
    return view('sekolah');
});
Route::get('/getsekolah', [SekolahController::class , 'getdata']);

//work
// Route::get('auth/google', 'App\Http\Controllers\Auth\GoogleController@redirectToGoogle');
// Route::get('auth/google/callback', 'App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');

Route::get('auth/{driver}', [GoogleController::class, 'redirectToGoogle'])->name('social.auth');
Route::get('auth/{driver}/callback', [GoogleController::class, 'handleGoogleCallback'])->name('social.callback');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


