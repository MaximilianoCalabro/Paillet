<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use admin\Cirugia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use admin\Http\Requests\CirugiaFormRequest;
use DB;

class CirugiaController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$cirugia=DB::table('cirugia')->get();
    		return view('cirugia.configurar_cirugia.index',["cirugia"=>$cirugia,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("cirugia.configurar_cirugia.create");
    }
	public function store(CirugiaFormRequest $request)
	{
		$cirugia=new Cirugia;
		$cirugia->texto=$request->get('texto');
		$cirugia->titulo=$request->get('titulo');
		$cirugia->texto2=$request->get('texto2');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugia->imagen=$file->getClientOriginalName();
		}
		$cirugia->save();
		return Redirect::to('cirugia/configurar_cirugia');
	}
	public function show($id)
	{
		return view("cirugia.configurar_cirugia.show",["cirugia"=>Cirugia::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("cirugia.configurar_cirugia.edit",["cirugia"=>Cirugia::findOrFail($id)]);	
	}
	public function update(CirugiaFormRequest $request, $id)
	{
		$cirugia=Cirugia::findOrFail($id);
		$cirugia->texto=$request->get('texto');
		$cirugia->titulo=$request->get('titulo');
		$cirugia->texto2=$request->get('texto2');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugia->imagen=$file->getClientOriginalName();
		}
		$cirugia->update();
		return Redirect::to('cirugia/configurar_cirugia');
	}
	public function destroy($id)
	{
		$cirugia=Cirugia::findOrFail($id);
		$cirugia->delete();
		return Redirect::to('cirugia/configurar_cirugia');
	}

}
