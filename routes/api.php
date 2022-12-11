<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\ProjectController;

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

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'user_name' => 'required',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('user_name', $request->user_name)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'user_name' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});

Route::get('/projects' , [ProjectController::class , 'index'])->middleware('auth:sanctum');
Route::get('/projects/{project:slug}' , [ProjectController::class , 'show']);

// Show All Users
Route::get('/users' , [UserController::class , 'index']);
