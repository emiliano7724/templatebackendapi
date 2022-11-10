<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RegisterController;

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

// Auth apis
Route::post('/register', [RegisterController::class,'register']);
Route::post('/login', [LoginController::class,'login']);


Route::group(['middleware' => 'auth:sanctum'], function () {

Route::post('/logout',  [LoginController::class,'logout']);
    
    // Users api
Route::get('/users/index', [UserController::class,'index']);
Route::post('/user/store', [UserController::class,'store']);
Route::post('/user/edit', [UserController::class,'edit']);
Route::put('/user/update/{id}', [UserController::class,'update']);

// Roles api
Route::get('/roles/index', [RolController::class,'index']);

// Domicilio ej api
Route::get('domicilios/index/{legajo}',[DomicilioController::class,'index']);
Route::get('domicilios/show/{legajo}/{domicilio}',[DomicilioController::class,'show']);
Route::post('domicilios/store',[DomicilioController::class,'store']);
});