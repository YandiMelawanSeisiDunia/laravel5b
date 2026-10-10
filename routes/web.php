<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('periode', PeriodeController::class);