<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name("home");
Route::get('project/{slug}', [HomeController::class, 'details'])->name('detail');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name("dashboard");
    Route::get('/projects', [DashboardController::class, 'projects'])->name("projects");
    Route::get('/projects/{project}/details', [DashboardController::class, 'projectDetails'])->name("projects.details");
    Route::delete('/projects/{project}', [DashboardController::class, 'projectDelete'])->name("projects.delete");

    Route::get('/settings', [DashboardController::class, 'settings'])->name("settings");
    Route::post('/prokect-submit', [DashboardController::class, 'createProject'])->name("project.submit");
    Route::post('/prokect-submit/{project}', [DashboardController::class, 'updateProject'])->name("project.update");
});


require __DIR__ . '/auth.php';
