<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;


// Project
Route::get('/' , [ProjectController::class , 'index']);
Route::get('/projects/create' , [ProjectController::class , 'create'])->name('submit-project');
Route::post('/projects' , [ProjectController::class , 'store'])->name('store-project');
Route::get('/projects/{id}/edit' , [ProjectController::class , 'edit']);
Route::post('/projects/{id}' , [ProjectController::class , 'update']);
Route::delete('users/{id}', [ProjectController::class , 'destroy']);
Route::get('/projects/{slug:slug}' , [ProjectController::class , 'show']);

// Users
Route::get('user/{user:user_name?}', [ProfileController::class, 'show'])->name('profile');

Auth::routes();
