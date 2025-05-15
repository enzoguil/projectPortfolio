<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/test-middleware', function () {
    return 'test';
});

Route::get('/portfolio/{userId}', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio/{userId}/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/portfolio/{userId}/projects/{id}', [HomeController::class, 'show'])->name('projects.showOne');
Route::get('/portfolio/{userId}/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/portfolio/{userId}/services', [HomeController::class, 'services']);

// Routes pour le back-office des projets
Route::middleware(['auth'])->prefix('backoffice')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('projects', ProjectController::class);
    Route::resource('services', ServiceController::class);
    Route::get('/statistics', [AdminController::class, 'statistics'])->name('backoffice.statistics');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
    Route::post('/projects', [ProjectController::class, 'store'])->name('backoffice.projects.store'); // Ajouter un projet
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('backoffice.projects.edit'); // Modifier un projet
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('backoffice.projects.update'); // Mettre à jour un projet
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('backoffice.projects.destroy'); // Supprimer un projet
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
