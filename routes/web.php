<?php

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

Route::resource('/cirugia/configurar_cirugia','CirugiaController');
Route::resource('/cirugias/configurar_cirugias','CirugiasController');
Route::resource('/clinica/configurar_clinica','ClinicaController');
Route::resource('/contacto/configurar_contacto','ContactoController');
Route::resource('/cv/configurar_cv','CvController');
Route::resource('/cv_lista/configurar_cv_lista','CvListaController');
Route::resource('/inicio/configurar_inicio','InicioController');