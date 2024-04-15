<?php

use App\Http\Controllers\ChauffeurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('chauffeur')->name('chauffeur.')->group(function () {
    Route::get('/', [ChauffeurController::class, "index"])->name('index');
    Route::get('/create', [ChauffeurController::class, "create"])->name('create');
    Route::post('/store', [ChauffeurController::class, "store"])->name('store');
});
