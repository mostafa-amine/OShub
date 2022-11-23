<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Project Routes
Route::get('/' , [ProjectController::class , 'index']);
Route::get('/projects/create' , [ProjectController::class , 'create'])->name('submit-project');
Route::post('/projects' , [ProjectController::class , 'store'])->name('store-project');
Route::get('/projects/{id}/edit' , [ProjectController::class , 'edit']);
Route::post('/projects/{id}' , [ProjectController::class , 'update']);
Route::delete('users/{id}', [ProjectController::class , 'destroy']);

Route::get('/projects/{slug}' , [ProjectController::class , 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
