<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('pacientes.fallecidos', 'PacienteController@fallecidos')->name('pacientes.fallecidos');
    Route::get('pacientes.blancos', 'PacienteController@blancos')->name('pacientes.blancos');
    Route::get('pacientes.sin_familia', 'PacienteController@sinFamilia')->name('pacientes.sin_familia');
    Route::post('familias/elimina/{paciente?}', 'PacienteController@eliminarInt')->name('elimina');
    Route::post('pacientes/corregir-familia', 'PacienteController@corregirFamilia')->name('corregir-familia');
    Route::post('/corregir-familia/{identificador}', [PacienteController::class, 'corregirFamilia'])->name('corregir.familia');
    Route::get('pacientes/data', [PacienteController::class, 'getPacientesData'])->name('pacientes.data');

    Route::resource('pacientes', 'PacienteController');

    //rutas para familias
    Route::resource('familias', 'FamiliaController');
    Route::get('familias.sin_integrantes', 'FamiliaController@sinIntegrantes')->name('familias.sin_integrantes');

    //rutas para perfil
    Route::get('/perfil', 'UserController@profile')->name('perfil');
    Route::put('perfil', 'UserController@updateProfile');

    Route::resource('viviendas', 'ViviendaController')->except(['index', 'create']);
    Route::get('viviendas/crea/{familia?}', 'ViviendaController@crea')->name('viviendas.crea');

    Route::resource('evaluaciones', 'EvaluacionController')->except(['index', 'create']);
    Route::get('evaluaciones/crea/{familia?}', 'EvaluacionController@crea')->name('evaluaciones.crea');

    Route::resource('familias.planes', 'PlanController');

    Route::get('estadisticas', 'EstadisticaController@index')->name('estadisticas.index');
    Route::get('estadisticas/seccionA1', 'EstadisticaController@seccionA1')->name('estadisticas.seccionA1');
    Route::get('estadisticas/seccionB', 'EstadisticaController@seccionB')->name('estadisticas.seccionB');

});
