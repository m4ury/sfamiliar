<?php

use Illuminate\Support\Facades\Route;

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
    Route::resource('pacientes', 'PacienteController');

    //rutas para familias
    Route::resource('familias', 'FamiliaController');

    //rutas para perfil
    Route::get('/perfil', 'UserController@profile')->name('perfil');
    Route::put('perfil', 'UserController@updateProfile');

    Route::resource('viviendas', 'ViviendaController')->except('[index, create]');
    Route::get('viviendas/crea/{familia?}', 'ViviendaController@crea')->name('viviendas.crea');
    Route::get('viviendas/{vivenda?}/edita', 'ViviendaController@edita')->name('viviendas.edita');

    //ruta para exportar a excel
    /*Route::get('exports/pacientes', 'PacienteController@export')->name('exports.pacientes');*/
});
