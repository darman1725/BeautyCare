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

Auth::routes();

 /* Method Untuk Folder Layouts */
Route::get('/index', [App\Http\Controllers\BeautyCareController::class, 'index'])->name('layouts.index');

Route::get('/login', [App\Http\Controllers\BeautyCareController::class, 'login'])->name('layouts.login');

