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
    Route::get('pacientes.fallecidos', 'PacienteController@fallecidos')->name('pacientes.fallecidos');
    Route::post('familias/elimina/{paciente?}', 'PacienteController@eliminarInt')->name('elimina');

    //rutas para familias
    Route::resource('familias', 'FamiliaController');

    //rutas para perfil
    Route::get('/perfil', 'UserController@profile')->name('perfil');
    Route::put('perfil', 'UserController@updateProfile');

    Route::resource('viviendas', 'ViviendaController')->except('[index, create, edit]');
    Route::get('viviendas/create/{familia?}', 'ViviendaController@create')->name('viviendas.create');
    Route::get('viviendas/{control?}/edit', 'ViviendaController@editar')->name('viviendas.editar');

    //ruta para exportar a excel
    /*Route::get('exports/pacientes', 'PacienteController@export')->name('exports.pacientes');*/
});
