<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Resources\BoletaResource;
use App\Models\Boletas;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoletaController;

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

// Route::get('/user', function (Request $request) {
//     return new UserResource(User::all());
// });
// Route::get('/user/{id}', function ($id) {
//     return new UserResource(User::findOrFail($id));
// });
// Route::get('/boleta', function (Request $request) {
//     return new BoletaResource(Boletas::all());
// });
// Route::get('/boleta/{id}', function ($id) {
//     return new BoletaResource(Boletas::findOrFail($id));
// });
// Route::get('/boleta/usuario/{id}', function ($user_id) {
//     return new BoletaResource(Boletas::findOrFail($user_id));
// });


Route::get('user', [UserController::class, 'index']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::put('user/{id}', [UserController::class, 'update']);


Route::get('boleta', [BoletaController::class, 'index']);
Route::post('boleta', [BoletaController::class, 'store']);
Route::get('boleta/{id}', [BoletaController::class, 'show']);
Route::put('boleta/{id}', [BoletaController::class, 'update']);
Route::get('boleta/user/{id}', [BoletaController::class, 'showbyuser']);


