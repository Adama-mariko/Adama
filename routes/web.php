<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AccueilController::class, 'index'])->name('accueil');
