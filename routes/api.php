<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return [
        'success' => true,
        'message' => 'test'
    ];
});

Route::get('student', [StudentsController::class, 'index'])->name('student.index');
Route::post('add',[StudentsController::class, 'store'])->name('student.store');
Route::put('student/{student}',[StudentsController::class, 'update'])->name('student.update');

Route::resource('application', ApplicationController::class);