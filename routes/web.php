<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/acne', function () {
    return view('acne');
});

Route::get('/botox', function () {
    return view('botox');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/electrocautery', function () {
    return view('electrocautery');
});

Route::get('/glowarmpit', function () {
    return view('glowarmpit');
});

Route::get('/glowneck', function () {
    return view('glowneck');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/purifying', function () {
    return view('purifying');
});

Route::get('/specialists', function () {
    return view('specialists');
});

Route::get('/treatments', function () {
    return view('treatments');
});

Route::get('/doktercatherina', function () {
    return view('doktercatherina');
});

Route::get('/dokterbalquist', function () {
    return view('dokterbalquist');
});

Route::get('/dokterainun', function () {
    return view('dokterainun');
});

Route::get('/dokteragustina', function () {
    return view('dokteragustina');
});

