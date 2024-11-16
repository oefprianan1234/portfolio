<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminSkillController;
use Illuminate\Support\Facades\Route;

// Admin Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Projects Management
Route::resource('projects', AdminProjectController::class);

// Skills Management
Route::resource('skills', AdminSkillController::class);