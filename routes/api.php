<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ApiTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sanctum/token', [ApiTokenController::class , 'index']);

Route::get('/projects' , [ProjectController::class , 'index'])->middleware('auth:sanctum');
Route::get('/projects/{project:slug}' , [ProjectController::class , 'show']);

// Show All Users
Route::get('/users' , [UserController::class , 'index']);
