<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;

use App\Http\Controllers\VistaController;

use App\Http\Controllers\RegistroUController;

use App\Http\Controllers\FormularioController;

use App\Http\Controllers\CRUDController;

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

Route::get('index', [PrincipalController::class, 'indexone'])->name('index.full'); 

Route::get('index/mapa', [PrincipalController::class, 'mapa']); 

Route::get('index/registrar', [PrincipalController::class, 'registraru']); 

Route::get('index/registrarzona', [PrincipalController::class, 'registrarz']); 

Route::get('index/tierrab', [PrincipalController::class, 'tierraB']);

Route::post('index/registrado', [RegistroUController::class, 'crear'])->name('Registro.crear');

//ruta CRUD

Route::resource('usuarios', 'App\Http\Controllers\CRUDController');

//

Route::get('vistas', [VistaController::class,'index']);

Route::get('vistas/crear', [VistaController::class, 'create']);

//Creacion de rutas con variables

Route::get('vistas/{a}', [VistaController::class, 'show']);

//Formulario De Ejemplo

Route::get('formulario', [FormularioController::class, 'inicio'])->name('formulario.inicio');

//Formulario agregar datos

Route::post('formulario/creado', [FormularioController::class, 'crear'])->name('formulario.crear');
