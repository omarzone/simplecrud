<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
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

//Llmar a una vista apuntando a su blade.php
// Route::get('/alumno', function () {
//     return view('alumno.index');
// });

//Llamar a una vista apuntando a una funcion del controlador
// Route::get('alumno/create',[AlumnoController::class,'create']);


//Genera todas las urls en funcion de las funciones del controlador
Route::resource('alumno',AlumnoController::class);

