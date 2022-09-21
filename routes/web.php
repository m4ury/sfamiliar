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
    Route::resource('pacientes', 'PacienteController');
    /*Route::resource('patologias', 'PatologiaController')->except('[index, create]');
    Route::get('patologias/{paciente?}', 'PatologiaController@index')->name('patologias');
    Route::get('patologias/create/{paciente?}', 'PatologiaController@create')->name('patologias.crear');*/
    Route::post('familias/elimina/{paciente?}', 'PacienteController@eliminarInt')->name('elimina');

    //rutas para familias
    Route::resource('familias', 'FamiliaController');

    //rutas para perfil
    Route::get('/perfil', 'UserController@profile')->name('perfil');
    Route::put('perfil', 'UserController@updateProfile');

    //rutas para estadisticas
    Route::get('/estadisticas', 'EstadisticaController@index')->name('estadisticas');
    Route::get('/estadisticas.seccion-a', 'EstadisticaController@seccionA')->name('estadisticas.seccion-a');
    Route::get('/estadisticas.seccion-b', 'EstadisticaController@seccionB')->name('estadisticas.seccion-b');
    Route::get('/estadisticas.seccion-c', 'EstadisticaController@seccionC')->name('estadisticas.seccion-c');

    Route::get('/estadisticas.seccion-p5a', 'EstadisticaController@seccionP5a')->name('estadisticas.seccion-p5a');
    Route::get('/estadisticas.seccion-p5b', 'EstadisticaController@seccionP5b')->name('estadisticas.seccion-p5b');
    Route::get('/estadisticas.programacion', 'EstadisticaController@programacion')->name('estadisticas.programacion');





    //ruta para exportar a excel
    /*Route::get('exports/pacientes', 'PacienteController@export')->name('exports.pacientes');*/
});
