<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClassTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\YearClassroomsController;
use App\Http\Controllers\EstablishmentController;
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
});

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
Route::resource('clients', ClientController::class)->middleware(['auth']);

Route::resource('students', StudentController::class)->middleware(['auth']);

Route::resource('families', FamilyController::class)->middleware(['auth']);

Route::resource('cycles', CycleController::class)->middleware(['auth']);
Route::resource('class_types', ClassTypeController::class)->middleware(['auth']);
Route::resource('establishments', EstablishmentController::class)->middleware(['auth']);

Route::resource('years', YearController::class)->middleware(['auth']);

Route::get('/year-classrooms/{year}/show', [YearClassroomsController::class, 'show'])
    ->name('yearClassrooms.show')->middleware((['auth']));
Route::get('/year-classrooms/{year}/edit', [YearClassroomsController::class, 'edit'])
    ->name('yearClassrooms.edit')->middleware((['auth']));
Route::post('/year-classrooms/{year}/update', [YearClassroomsController::class, 'update'])
    ->name('yearClassrooms.update')->middleware((['auth']));

Route::resource('classrooms', ClassroomController::class)->except(['create', 'store', 'destroy'])->middleware(['auth']);

Route::resource('student_registrations', StudentRegistrationController::class)->middleware(['auth']);
