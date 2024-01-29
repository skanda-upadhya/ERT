<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\ErtController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\ZoneController;
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
Route::resource('/ert', ZoneController::class);
Route::resource('/login', LoginController::class);
Route::get('/dash', [DashController::class, 'index'])->name('zones.dashboard');



Route::get('/zone', [ZoneController::class, 'index'])->name('zones.index');
Route::get('/zones/create', [ZoneController::class, 'create'])->name('zones.create');
Route::get('/zones/edit/{id}', [ZoneController::class, 'edit'])->name('zones.edit');
Route::post('/zones_update/{id}', [ZoneController::class, 'update'])->name('zones.update');
Route::post('/zones/store', [ZoneController::class, 'store'])->name('zones.store');
Route::delete('/zones/delete/{id}', [ZoneController::class, 'destroy'])->name('zones.delete');
Route::get('/zone/show/{id}', [ZoneController::class, 'show'])->name('zones.show');



Route::get('/specialization', [SpecializationController::class, 'index'])->name('specialization.index');
Route::get('/specialization/create', [SpecializationController::class, 'create'])->name('specialization.create');
Route::get('/specialization/edit/{id}', [SpecializationController::class, 'edit'])->name('specialization.edit');
Route::post('/specialization_update/{id}', [SpecializationController::class, 'update'])->name('specialization.update');
Route::post('/specialization/store', [SpecializationController::class, 'store'])->name('specialization.store');
Route::delete('/specialization/delete/{id}', [SpecializationController::class, 'destroy'])->name('specialization.delete');


Route::get('/ert', [ErtController::class, 'index'])->name('ert.index');
 Route::get('/ert/create', [ErtController::class, 'create'])->name('ert.create');
 Route::get('/ert/edit/{id}', [ErtController::class, 'edit'])->name('ert.edit');
 Route::post('/ert_update/{id}', [ErtController::class, 'update'])->name('ert.update');
 Route::post('/ert/store', [ErtController::class, 'store'])->name('ert.store');
 Route::delete('/ert/delete/{id}', [ErtController::class, 'destroy'])->name('ert.delete');
 Route::get('/ert/show/{id}', [ErtController::class, 'show'])->name('ert.show');
 



Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
