<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

// Home
Route::get('/' , [HomeController::class , 'show'])->name('home');

// Projects
Route::prefix('projects')->group(function() {
    Route::get('authored' , AuthoredProjects::class);
    Route::get('create' , [ProjectController::class , 'create'])->name('projects.create');
    Route::post('/' , [ProjectController::class , 'store'])->name('projects.store');
    Route::get('{project}/edit' , [ProjectController::class , 'edit'])->name('projects.edit');
    Route::post('{project}' , [ProjectController::class , 'update'])->name('projects.update');
    Route::delete('{project}', [ProjectController::class , 'destroy'])->name('projects.destroy');
    Route::get('{project:slug}' , [ProjectController::class , 'show'])->name('projects.show');
});


// Users
Route::get('user/{user:user_name?}', [ProfileController::class, 'show'])->name('profile');

Auth::routes();
