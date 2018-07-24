<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Subseccion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\SubseccionFormRequest;
use DB;

class SubseccionController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$subseccion=DB::table('subseccion')->get();
    		return view('admin.subseccion.index',["subseccion"=>$subseccion,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.subseccion.create");
    }
	public function store(SubseccionFormRequest $request)
	{
		$subseccion=new Subseccion;
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$subseccion->imagen=$file->getClientOriginalName();
		}
		$subseccion->save();
		return Redirect::to('admin/subseccion');
	}
	public function show($id)
	{
		return view("admin.subseccion.show",["subseccion"=>Subseccion::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.subseccion.edit",["subseccion"=>Subseccion::findOrFail($id)]);
	}
	public function update(SubseccionFormRequest $request, $id)
	{
		$subseccion=Subseccion::findOrFail($id);
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$subseccion->imagen=$file->getClientOriginalName();
		}
		$subseccion->update();
		return Redirect::to('admin/subseccion');
	}
	public function destroy($id)
	{
		$subseccion=Subseccion::findOrFail($id);
		$subseccion->delete();
		return Redirect::to('admin/subseccion');
	}
}
