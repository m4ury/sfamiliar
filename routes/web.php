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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('pacientes', 'PacienteController');
    Route::resource('patologias', 'PatologiaController')->except('[index, create]');
    Route::get('patologias/{paciente?}', 'PatologiaController@index')->name('patologias');
    Route::get('patologias/create/{paciente?}', 'PatologiaController@create')->name('patologias.create');

    //rutas para controles
    Route::resource('controles', 'ControlController')->except('[index, create]');
    Route::get('controles/{paciente?}', 'ControlController@index')->name('controles');
    Route::get('controles/create/{paciente?}', 'ControlController@create')->name('controles.create');

    //rutas para perfil
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::put('profile/{user?}', 'UserController@updateProfile');

    //rutas para paciente patologias
    Route::resource('ppatologias', 'PacientePatologiaController');
    Route::get('pacientes/patologia/{paciente?}', 'PacientePatologiaController@create')->name('pacientes.patologia');

    //ruta para exportar a excel
    /*Route::get('exports/pacientes', 'PacienteController@export')->name('exports.pacientes');*/
});
