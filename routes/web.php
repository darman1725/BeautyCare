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

Route::get('/', function () {
    return view('welcome');
});

/* File Pada Halaman About Beauty Care */
Route::get('/about', function () {
    return view('about');
});
     
/* File Pada Halaman Contact Beauty Care */
Route::get('/contact', function () {
    return view('contact');
});

/* File Pada Halaman Index Beauty Care */
Route::get('/index', function () {
    return view('index');
}); 


/* File Pada Halaman Main Beauty Care */
Route::get('/main', function () {
    return view('main');
});

/* File Pada Halaman Specialist Beauty Care */
Route::get('/specialists', function () {
    return view('specialists');
});

/* File Pada Halaman Treatments Beauty Care */
Route::get('/treatments', function () {
    return view('treatments');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
