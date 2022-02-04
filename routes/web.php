<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UpazilaController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccinationCenterController;
use App\Http\Controllers\RegistrationController;

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


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories' ,CategoryController::class);
    Route::resource('divisions' ,DivisionController::class);
    Route::post('division-enable-disable/{id}' ,[DivisionController::class, 'enableDisable'])->name('division-enable-disable');

    Route::resource('districts' ,DistrictController::class);
    Route::resource('upazilas' ,UpazilaController::class);
    Route::resource('peoples' ,PeopleController::class);
    Route::resource('vaccines' ,VaccineController::class);
    Route::resource('vaccination-centers' ,VaccinationCenterController::class);
    Route::resource('registrations' ,RegistrationController::class);

});

require __DIR__.'/auth.php';
