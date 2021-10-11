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
Route::get('/indexLayouts', [App\Http\Controllers\BeautyCareController::class, 'indexLayouts'])->name('layouts.index');

Route::get('/loginLayouts', [App\Http\Controllers\BeautyCareController::class, 'loginLayouts'])->name('layouts.login');

Route::get('/registerLayouts', [App\Http\Controllers\BeautyCareController::class, 'registerLayouts'])->name('layouts.register');

Route::get('/contactLayouts', [App\Http\Controllers\BeautyCareController::class, 'contactLayouts'])->name('layouts.contact');

Route::get('/specialistsLayouts', [App\Http\Controllers\BeautyCareController::class, 'specialistsLayouts'])->name('layouts.specialists');

Route::get('/treatmentsLayouts', [App\Http\Controllers\BeautyCareController::class, 'treatmentsLayouts'])->name('layouts.treatments');

Route::get('/formreservasiLayouts', [App\Http\Controllers\BeautyCareController::class, 'formreservasiLayouts'])->name('layouts.formreservasi');

Route::get('/masterLayouts', [App\Http\Controllers\BeautyCareController::class, 'masterLayouts'])->name('layouts.master');


 /* Method Untuk Folder Doctors */
 Route::get('/createDoctors', [App\Http\Controllers\BeautyCareController::class, 'createDoctors'])->name('doctors.create');

 Route::get('/detailDoctors', [App\Http\Controllers\BeautyCareController::class, 'detailDoctors'])->name('doctors.detail');

 Route::get('/editDoctors', [App\Http\Controllers\BeautyCareController::class, 'editDoctors'])->name('doctors.edit');

 Route::get('/indexDoctors', [App\Http\Controllers\BeautyCareController::class, 'indexDoctors'])->name('doctors.index');


  /* Method Untuk Folder Treatments */
  Route::get('/createTreatments', [App\Http\Controllers\BeautyCareController::class, 'createTreatments'])->name('doctors.create');

  Route::get('/detailTreatments', [App\Http\Controllers\BeautyCareController::class, 'detailTreatments'])->name('doctors.detail');
 
  Route::get('/editTreatments', [App\Http\Controllers\BeautyCareController::class, 'editTreatments'])->name('doctors.edit');
 
  Route::get('/indexTreatments', [App\Http\Controllers\BeautyCareController::class, 'indexTreatments'])->name('doctors.index');


 /* Method Untuk Folder Dashboard */
 Route::get('/formreservasi', [App\Http\Controllers\BeautyCareController::class, 'formreservasi'])->name('dashboard.formreservasi');


 /* Method Untuk Folder Customers */
 Route::get('/customersTreatments', [App\Http\Controllers\BeautyCareController::class, 'customersTreatments'])->name('customers.customersTreatments');
