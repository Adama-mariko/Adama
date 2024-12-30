<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::post('/accueil', [AccueilController::class, 'store'])->name('accueil.store');
Route::get('/run-tests', function () {
    Artisan::call('test');
    return nl2br(Artisan::output());
});
