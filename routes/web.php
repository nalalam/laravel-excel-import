<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/student', [StudentController::class, 'importExcel'])->name('student');
Route::post('/store', [StudentController::class, 'uploadExcel'])->name('store');
