<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CarSpecsController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\NomineeController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentsController;
// use App\Models\Address;

Route::resource('application', ApplicationController::class);

Route::resource('kyc', KycController::class);

Route::resource('address', AddressController::class);

Route::resource('nominee', NomineeController::class);

Route::put('car-specs/{id}', [CarSpecsController::class, 'update'])->name('car-specs.update');
