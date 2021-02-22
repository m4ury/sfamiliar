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

    Route::resource('controles', 'ControlController');

    Route::resource('fichas', 'FichaController');

    Route::get('/profile', 'UserController@profile')->name('profile');
   // Route::post('/profile', 'UserController@updateAvatar');


    /*//rutas para presupuestos
    Route::resource('presupuesto', 'PresupuestoController');
    Route::get('presupuesto/getpdf/{presupuesto}', 'PresupuestoController@getPdf')->name('presupuesto.getpdf');
    Route::get('presupuestos/{paciente?}', 'PresupuestoController@presupuestoPcte')->name('presupuestos');
    Route::get('presupuesto/create/{paciente?}', 'PresupuestoController@create')->name('presupuesto.create');

    //rutas para mensajes
    Route::resource('mensaje', 'MensajeController')->except('[index, create]');
    Route::get('mensajes/{paciente?}', 'MensajeController@index')->name('mensajes');
    Route::get('mensaje/create/{paciente?}', 'MensajeController@create')->name('mensaje.create');

    Route::get('/perfil', 'UserController@perfil')->name('perfil');

    //ruta para exportar a excel
    Route::get('exports/pacientes', 'PacienteController@export')->name('exports.pacientes');


    Route::resource('abono', 'AbonoController');
    Route::get('abonos/{paciente?}', 'AbonoController@abonoPcte')->name('abonos');
    Route::get('abono/create/{paciente?}', 'AbonoController@create')->name('abono.create');*/
});