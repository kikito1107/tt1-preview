<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/error', function () {
    return view('error');
});

Route::get('/', function () {
   return view('login');
});

Route::get('/reset', function () {
    return view('reset');
});

/**
 * Vista principal del Administrador
 */
Route::get('/admin', function () {
    return view('admin');
});

/**
 * Vista principal del Médico
 */
Route::get('/medico', function () {
    return view('medico');
});

/**
 * Vista principal del Paciente
 */
Route::get('/paciente', function () {
    return view('paciente');
});

/*
|--------------------------------------------------------------------------
| MedicoController
|--------------------------------------------------------------------------
*/

Route::get('/medicos/', function () {
   return view('medicos.index');
});

Route::get('/medicos/agregar', function () {
    return view('medicos.create');
});

Route::get('/medicos/ver', function () {
    return view('medicos.view');
});

Route::get('/medicos/actualizar', function () {
    return view('medicos.update');
});

/*
|--------------------------------------------------------------------------
| RepertorioController
|--------------------------------------------------------------------------
*/
Route::get('repertorio', function () {
   return view('repertorio.index');
});

/*
|--------------------------------------------------------------------------
| CitaController
|--------------------------------------------------------------------------
*/
Route::get('/citas/', function () {
    return view('citas.dia');
});

Route::get('/consultas/', function () {
    return view('consultas.consulta');
});