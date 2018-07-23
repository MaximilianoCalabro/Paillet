<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class PaginaController extends Controller
{
	public function show() //cosulta a la db por cada seccion
	{
		$inicio=DB::table('inicio')->get();
		$cirugia=DB::table('cirugia')->get();
		$cirugia_slider=DB::table('cirugia_slider')->get();
		$contacto=DB::table('contacto')->get();
		$cv=DB::table('cv')->get();
		$cv_lista=DB::table('cv_lista')->get();
		$cv_plastica=DB::table('cv_plastica')->get();

		return view('index',["inicio"=>$inicio, "cirugia"=>$cirugia, "cirugia_slider"=>$cirugia_slider, "contacto"=>$contacto, "cv"=>$cv, "cv_lista"=>$cv_lista, "cv_plastica"=>$cv_plastica]);

	}
}
