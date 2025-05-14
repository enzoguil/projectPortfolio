<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\QuoteController;

Route::get('/projects', [ProjectController::class, 'index']); // Lister les projets
Route::get('/services', [ServiceController::class, 'index']); // Lister les services
Route::post('/quotes', [QuoteController::class, 'store']); // Créer une demande de devis
