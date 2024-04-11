<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DisciplineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('courses', CourseController::class);
Route::resource('disciplines', DisciplineController::class);
