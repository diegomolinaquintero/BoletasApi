# BoletasApi

Entra a la rama Master y bajala

Debes ejecutar el backend con php artisan serve --port:8000
y el front con php artisan serve --port:8001

Rutas del Appi

http://127.0.0.1:8000/api/

Route::get('user', [UserController::class, 'index']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::put('user/{id}', [UserController::class, 'update']);


Route::get('boleta', [BoletaController::class, 'index']);
Route::post('boleta', [BoletaController::class, 'store']);
Route::get('boleta/{id}', [BoletaController::class, 'show']);
Route::put('boleta/{id}', [BoletaController::class, 'update']);
Route::get('boleta/user/{id}', [BoletaController::class, 'showbyuser']);
