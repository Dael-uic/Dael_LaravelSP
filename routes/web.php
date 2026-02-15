<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('students', StudentController::class);