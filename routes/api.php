<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\UserController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get_ingredientes', [IngredientController::class, 'prueba']);

Route::get('get_datauser', [UserController::class, 'dataUser']);

Route::post('registro', [RegisterController::class, 'create']);