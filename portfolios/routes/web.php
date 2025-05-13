<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/backoffice', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [HomeController::class, 'show'])->name('projects.show');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');

Route::get('/backoffice/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\ProjectController;

// Routes pour le back-office des projets
Route::prefix('backoffice')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('projects.index'); // Liste des projets
    Route::post('/projects', [ProjectController::class, 'store'])->middleware(['auth', 'verified'])->name('projects.store'); // Ajouter un projet
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->middleware(['auth', 'verified'])->name('projects.edit'); // Modifier un projet
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->middleware(['auth', 'verified'])->name('projects.update'); // Mettre à jour un projet
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->middleware(['auth', 'verified'])->name('projects.destroy'); // Supprimer un projet
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
