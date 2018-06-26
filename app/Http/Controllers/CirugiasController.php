<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use admin\Cirugias;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use admin\Http\Requests\CirugiasFormRequest;
use DB;

class CirugiasController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$cirugias=DB::table('cirugias')->get();
    		return view('cirugias.configurar_cirugias.index',["cirugias"=>$cirugias,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("cirugias.configurar_cirugias.create");
    }
	public function store(CirugiasFormRequest $request)
	{
		$cirugias=new Cirugias;
		$cirugias->nombre=$request->get('nombre');
		$cirugias->que_es=$request->get('que_es');
		$cirugias->pre_ope=$request->get('pre_ope');
		$cirugias->procedimientos=$request->get('procedimientos');
		$cirugias->post_ope=$request->get('post_ope');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugias->imagen=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen_slider')){
			$file=Input::file('imagen_slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugias->imagen_slider=$file->getClientOriginalName();
		}
		$cirugias->save();
		return Redirect::to('cirugias/configurar_cirugias');
	}
	public function show($id)
	{
		return view("cirugias.configurar_cirugias.show",["cirugias"=>Cirugias::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("cirugias.configurar_cirugias.edit",["cirugias"=>Cirugias::findOrFail($id)]);	
	}
	public function update(CirugiasFormRequest $request, $id)
	{
		$cirugia=Cirugia::findOrFail($id);
		$cirugias->nombre=$request->get('nombre');
		$cirugias->que_es=$request->get('que_es');
		$cirugias->pre_ope=$request->get('pre_ope');
		$cirugias->procedimientos=$request->get('procedimientos');
		$cirugias->post_ope=$request->get('post_ope');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugias->imagen=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen_slider')){
			$file=Input::file('imagen_slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugias->imagen_slider=$file->getClientOriginalName();
		}
		$cirugias->update();
		return Redirect::to('cirugias/configurar_cirugias');
	}
	public function destroy($id)
	{
		$cirugias=Cirugias::findOrFail($id);
		$cirugias->delete();
		return Redirect::to('cirugias/configurar_cirugias');
	}
}
