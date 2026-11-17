<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

// Welcome Page - Today's Tasks
Route::get('/', [TaskController::class, 'welcome'])->name('welcome');

// Task List - All Tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');

// Profile - Single Demo User
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// About - Static Developer Information
Route::get('/about', function () {
    return view('about');
})->name('about');
