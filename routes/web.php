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

Route::get('/contact', [App\Http\Controllers\BeautyCareController::class, 'contact'])->name('layouts.contact');

Route::get('/specialists', [App\Http\Controllers\BeautyCareController::class, 'specialists'])->name('layouts.specialists');

Route::get('/treatments', [App\Http\Controllers\BeautyCareController::class, 'treatments'])->name('layouts.treatments');


 /* Method Untuk Folder Docters */
 Route::get('/dokteragustina', [App\Http\Controllers\BeautyCareController::class, 'dragustina'])->name('docters.dokteragustina');

 Route::get('/dokterainun', [App\Http\Controllers\BeautyCareController::class, 'drainun'])->name('docters.dokterainun');

 Route::get('/dokterbalquist', [App\Http\Controllers\BeautyCareController::class, 'drbalquist'])->name('docters.dokterbalquist');

  Route::get('/doktercatherina', [App\Http\Controllers\BeautyCareController::class, 'drcatherina'])->name('docters.doktercatherina');


  /* Method Untuk Folder Treatments */
 Route::get('/acne', [App\Http\Controllers\BeautyCareController::class, 'acne'])->name('treatments.acne');

 Route::get('/botox', [App\Http\Controllers\BeautyCareController::class, 'botox'])->name('treatments.botox');

 Route::get('/electrocautery', [App\Http\Controllers\BeautyCareController::class, 'electrocautery'])->name('treatments.electrocautery');

 Route::get('/glowarmpit', [App\Http\Controllers\BeautyCareController::class, 'glowarmpit'])->name('treatments.glowarmpit');
 
 Route::get('/glowneck', [App\Http\Controllers\BeautyCareController::class, 'glowneck'])->name('treatments.glowneck');

 Route::get('/purifying', [App\Http\Controllers\BeautyCareController::class, 'purifying'])->name('treatments.purifying');

 /* Method Untuk Folder Dashboard */
 Route::get('/formreservasi', [App\Http\Controllers\BeautyCareController::class, 'formreservasi'])->name('dashboard.formreservasi');