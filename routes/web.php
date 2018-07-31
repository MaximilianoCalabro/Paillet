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

Route::get('/.admin', function () {
    return view('auth/login');
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
Route::resource('/admin/subseccion','SubseccionController');

Route::resource('/pagina/parpados', 'ParpadosController');
Route::resource('/pagina/nariz', 'NarizController');
Route::resource('/pagina/facial', 'FacialController');
Route::resource('/pagina/mamarias', 'MamariasController');
Route::resource('/pagina/corporal', 'CorporalController');
Route::resource('/pagina/botox', 'BotoxController');
Route::resource('/pagina/otros', 'OtrosController');


Route::get('/', 'PaginaController@show');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/home', 'HomeController@index')->name('home');
