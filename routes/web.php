<?php

use Illuminate\Support\Facades\Route;
//primero se invoca la clase con su ruta
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;

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
    return view('cursos.bienvenido');
});
Route::get('/cursos/sobrenos',function(){
    return view('cursos.sobrenos');
});
Route::get('miruta', function() {
    return 'Estoy en Laravel';
});

//los parámetros van entre llaves
Route::get('/minombre/{nombre}', function($nombre) {
    return 'Hola, soy ' . $nombre;
});

//Ruta llamada suma. EL resultado será: la suma de a + b es:
Route::get('/suma/{a}/{b}', function($a,$b) {
    return 'La suma total es: ' . $a + $b;
});

//menciono la clase y el método como un array
//debo usar la palabra reservada class
//el método va entre comilla simple
Route::get('/rutamulti/{a}/{b}',[MiControlador::class,
'multipli']);

Route::get('/heladeria/{a}', [HeladeriaController::class,
'totalHelado']);

Route::get('/iva/{name}/{precio}',[ControladorPrecios::class,'getIva']);

Route::resource('cursos', CursoController::class);
