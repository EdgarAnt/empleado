<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//esta ruta accede en welcome
Route::get('/', function () {
    return view('welcome');
});

//El punto es lo que te permite acceder a cualquiera de los elementos dentro de la carpeta empleado.
//Basicamente lo que hago es recibir la url
Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create', [EmpleadoController::class,'create']);