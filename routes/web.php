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
    return view('/index');
});

Route::get('/.admin', function () {
    return view('auth/login');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/admin/cirugia','CirugiaController');
Route::resource('/admin/cirugia_slider','CirugiaSliderController');
Route::resource('/admin/clinica','ClinicaController');
Route::resource('/admin/contacto','ContactoController');
Route::resource('/admin/cv','CvController');
Route::resource('/admin/cv_lista','CvListaController');
Route::resource('/admin/cv_plastica','CvPlasticaController');
Route::resource('/admin/inicio','InicioController');
Route::resource('/admin/subseccion','SubseccionController');

Route::get('/', 'PaginaController@show');
Route::get('/layouts/admin', 'AdminController@index');

/* .BLADES*/
Route::resource('/pagina/parpados', 'ParpadosController');
Route::resource('/pagina/nariz', 'NarizController');
Route::resource('/pagina/facial', 'FacialController');
Route::resource('/pagina/mamaria', 'MamariasController');
Route::resource('/pagina/corporal', 'CorporalController');
Route::resource('/pagina/botox', 'BotoxController');
Route::resource('/pagina/otros', 'OtrosController');

/* CIRUGIAS */
Route::resource('/admin/cirugias/blefaroplastia','BlefaroplastiaController');
Route::resource('/admin/cirugias/rinoplastia','RinoplastiaController');
Route::resource('/admin/cirugias/lifting','LiftingController');
Route::resource('/admin/cirugias/dermoabrasion','DermoabrasionController');
Route::resource('/admin/cirugias/peeling','PeelingController');
Route::resource('/admin/cirugias/aumento','AumentoController');
Route::resource('/admin/cirugias/reduccion','ReduccionController');
Route::resource('/admin/cirugias/levantamiento','LevantamientoController');
Route::resource('/admin/cirugias/liposuccion','LiposuccionController');
Route::resource('/admin/cirugias/abdominoplastia','AbdominoplastiaController');
Route::resource('/admin/cirugias/pantorrillas','PantorrillasController');
Route::resource('/admin/cirugias/gluteos','GluteosController');
Route::resource('/admin/cirugias/arrugas','ArrugasController');
Route::resource('/admin/cirugias/sudoracion','SudoracionController');
Route::resource('/admin/cirugias/orejas','OrejasController');
Route::resource('/admin/cirugias/cutaneas','CutaneasController');
Route::resource('/admin/cirugias/capilar','CapilarController');
Route::resource('/admin/cirugias/lazer','LazerController');
Route::resource('/admin/cirugias/brazos','BrazosController');
Route::resource('/admin/cirugias/reconstruccion','ReconstruccionController');
