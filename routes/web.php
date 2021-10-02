<?php

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

/* File Pada Halaman Blog Single Beauty Care */
Route::get('/blog-single', function () {
    return view('blog-single');
});

/* File Pada Halaman Blog Single Beauty Care */
Route::get('/blog', function () {
    return view('blog');
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

/* File Pada Halaman Pricing Beauty Care */
Route::get('/pricing', function () {
    return view('pricing');
});

/* File Pada Halaman Specialist Beauty Care */
Route::get('/specialists', function () {
    return view('specialists');
});

/* File Pada Halaman Treatments Beauty Care */
Route::get('/treatments', function () {
    return view('treatments');
});
