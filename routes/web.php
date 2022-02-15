<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClassroomsCapacityController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\EstablishmentYearController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\YearController;

use Illuminate\Support\Facades\Route;

/*
|-------------------------------------
| Web Routes
|-------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|-------------------------------------
| Auth Routes
|-------------------------------------
*/
require __DIR__ . '/auth.php';

/*
|-------------------------------------
| Ressource Routes
|-------------------------------------
*/

// Route::resource('years', YearController::class)->except(['destroy'])->middleware(['auth']);
Route::resource('establishments', EstablishmentController::class)->middleware(['auth']);

Route::resource('establishment-years', EstablishmentYearController::class)->only(['index', 'show', 'create', 'store'])->middleware(['auth']);

Route::controller(ClassroomsCapacityController::class)
    ->prefix("classrooms-capacity/establishment_year/")
    ->middleware((['auth']))
    ->group(function () {
        Route::get('/{establishment_year}/edit', 'edit')->name('classrooms_capacity.edit');
        Route::post('/{establishment_year}/update', 'update')->name('classrooms_capacity.update');
    });

Route::resource('clients', ClientController::class)->except(['create'])->middleware(['auth']);

Route::resource('students', StudentController::class)->except(['create'])->middleware(['auth']);

Route::resource('families', FamilyController::class)->middleware(['auth']);

Route::resource('classrooms', ClassroomController::class)->except(['create', 'store', 'destroy'])->middleware(['auth']);

Route::resource('student_registrations', StudentRegistrationController::class)->middleware(['auth']);
