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
    return view('index');
});

Route::get('/admin', function () {
    return view('layouts/admin');
});

Route::resource('/admin/cirugia','CirugiaController');
Route::resource('/admin/cirugia_slider','CirugiaSliderController');
Route::resource('/admin/cirugias','CirugiasController');
Route::resource('/admin/clinica','ClinicaController');
Route::resource('/admin/contacto','ContactoController');
Route::resource('/admin/cv','CvController');
Route::resource('/admin/cv_lista','CvListaController');
Route::resource('/admin/cv_plastica','CvPlasticaController');
Route::resource('/admin/inicio','InicioController');

Route::get('/pagina/parpados', 'PaginaController@show');
Route::get('/pagina/botox', 'PaginaController@show');
Route::get('/pagina/corporal', 'PaginaController@show');
Route::get('/pagina/facial', 'PaginaController@show');
Route::get('/pagina/nariz', 'PaginaController@show');
Route::get('/pagina/botox', 'PaginaController@show');
Route::get('/pagina/otros', 'PaginaController@show');

Route::get('/', 'PaginaController@show');