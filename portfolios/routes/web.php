<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/backoffice', function () {
    return view('welcome');
});

Route::get('/portfolio/{userId}', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio/{userId}/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/portfolio/{userId}/projects/{id}', [HomeController::class, 'show'])->name('projects.show');
Route::get('/portfolio/{userId}/skills', [HomeController::class, 'skills'])->name('skills');

Route::get('/backoffice/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AdminController;

// Routes pour le back-office des projets
Route::middleware(['auth'])->prefix('backoffice')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('backoffice.dashboard');
    Route::resource('projects', ProjectController::class);
    Route::resource('services', ServiceController::class);
    Route::get('/statistics', [AdminController::class, 'statistics'])->name('backoffice.statistics');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store'); // Ajouter un projet
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit'); // Modifier un projet
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update'); // Mettre à jour un projet
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy'); // Supprimer un projet
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
