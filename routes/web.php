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

Route::get('/admin', function () {
    return view('layouts/admin');
});

Route::resource('/admin/cirugia','CirugiaController');
Route::resource('/admin/cirugias','CirugiasController');
Route::resource('/admin/clinica','ClinicaController');
Route::resource('/admin/contacto','ContactoController');
Route::resource('/admin/cv','CvController');
Route::resource('/admin/cv_lista','CvListaController');
Route::resource('/admin/inicio','InicioController');