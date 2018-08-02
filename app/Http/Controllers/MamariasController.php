<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class MamariasController extends Controller
{
	public function index()
	{
		$inicio=DB::table('inicio')->get();
		$cirugia=DB::table('cirugia')->get();
		$cirugias=DB::table('cirugias')->get();
		$cirugia_slider=DB::table('cirugia_slider')->get();
		$contacto=DB::table('contacto')->get();
		$cv=DB::table('cv')->get();
		$cv_lista=DB::table('cv_lista')->get();
		$cv_plastica=DB::table('cv_plastica')->get();
		$clinica=DB::table('clinica')->get();
		$aumento=DB::table('aumento_mamario')->get();
		$reduccion=DB::table('reduccion_mamario')->get();
		$levantamiento=DB::table('levantamiento')->get();

		return view('/pagina/mamaria',["inicio"=>$inicio, "cirugia"=>$cirugia, "cirugias"=>$cirugias, "cirugia_slider"=>$cirugia_slider, "contacto"=>$contacto, "cv"=>$cv, "cv_lista"=>$cv_lista, "cv_plastica"=>$cv_plastica, "clinica"=>$clinica, "aumento"=>$aumento, "reduccion"=>$reduccion, "levantamiento"=>$levantamiento]);
	}
}
