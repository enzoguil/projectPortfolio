<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ProjectController;

Route::get('/projects', [ProjectController::class, 'index']);
