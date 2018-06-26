<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use admin\Inicio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use admin\Http\Requests\InicioFormRequest;
use DB;

class InicioController extends Controller
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
    		$inicio=DB::table('inicio')->get();
    		return view('inicio.configurar_inicio.index',["inicio"=>$inicio,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("inicio.configurar_inicio.create");
    }
	public function store(InicioFormRequest $request)
	{
		$inicio=new Inicio;
		if (Input::hasFile ('logo')){
			$file=Input::file('logo');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$inicio->logo=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$inicio->imagen=$file->getClientOriginalName();
		}
		$inicio->save();
		return Redirect::to('inicio/configurar_inicio');
	}
	public function show($id)
	{
		return view("inicio.configurar_inicio.show",["inicio"=>Inicio::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("inicio.configurar_inicio.edit",["inicio"=>Inicio::findOrFail($id)]);	
	}
	public function update(InicioFormRequest $request, $id)
	{
		$inicio=Inicio::findOrFail($id);
		if (Input::hasFile ('logo')){
			$file=Input::file('logo');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$inicio->logo=$file->getClientOriginalName();
		}
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$inicio->imagen=$file->getClientOriginalName();
		}
		$inicio->update();
		return Redirect::to('inicio/configurar_inicio');
	}
	public function destroy($id)
	{
		$inicio=Inicio::findOrFail($id);
		$inicio->delete();
		return Redirect::to('inicio/configurar_inicio');
	}
}
