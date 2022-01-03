<?php

use App\Http\Controllers\ClassTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\EstablishmentClassController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\YearClassController;
use App\Http\Controllers\YearController;
use Illuminate\Support\Facades\Route;

/*
|-------------------------------------
| Web Routes
|-------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::resource('clients', ClientController::class);
Route::resource('students', StudentController::class);

Route::resource('cycles', CycleController::class);
Route::resource('class_types', ClassTypeController::class);
Route::resource('establishment_classes', EstablishmentClassController::class);
Route::resource('establishments', EstablishmentController::class);
Route::resource('years', YearController::class);
Route::resource('year_classes', YearClassController::class);
Route::resource('student_registrations', StudentRegistrationController::class);
