<?php

use App\Http\Controllers\ClassTypeController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\YearController;
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

Route::view('/', 'app.dash');

// test Cycle model and its relationships
Route::get('cycles', [CycleController::class, 'showAll']);
Route::get('cycle/{cycle}/class_types', [CycleController::class, 'showAllClassTypes']);
Route::get('cycle/{cycle}/establishment_classes', [CycleController::class, 'showAllEstablishmentClasses']);

// test ClassTypes model and its relationships
Route::get('class_type/{class_type}', [ClassTypeController::class, 'show']);
Route::get('class_types', [ClassTypeController::class, 'showAll']);
Route::get('class_type/{class_type}/establishment_classes', [ClassTypeController::class, 'showAllEstablishmentClasses']);
Route::get('class_type/{class_type}/year_classes', [ClassTypeController::class, 'showAllYearClasses']);

// test Establishment model and its relationships
Route::get('establishments', [EstablishmentController::class, 'showAll']);
Route::get('establishment/{establishment}/establishment_classes', [EstablishmentController::class, 'showAllEstablishmentClasses']);
Route::get('establishment/{establishment}/year_classes', [EstablishmentController::class, 'showAllYearClasses']);

// test Year model and its relationships
Route::get('years', [YearController::class, 'showAll']);
Route::get('year/{year}/year_classes', [YearController::class, 'showAllYearClasses']);
