<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Reduccion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\ReduccionFormRequest;
use DB;

class ReduccionController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $reduccion=DB::table('reduccion_mamario')->get();
	    return view('admin.cirugias.reduccion.index',["reduccion"=>$reduccion]);
    }
    public function create()
    {
    	return view ("admin.cirugias.reduccion.create");
    }
	public function store(ReduccionFormRequest $request)
	{
		$reduccion=new Reduccion;
		$reduccion->nombre=$request->get('nombre');
		$reduccion->que=$request->get('que');
		$reduccion->pre=$request->get('pre');
		$reduccion->pro=$request->get('pro');
		$reduccion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$reduccion->imagen=$file->getClientOriginalName();
		}
		$reduccion->save();
		return Redirect::to('admin/cirugias/reduccion');
	}
	public function show($id)
	{
		return view("admin.cirugias.reduccion.show",["reduccion"=>Reduccion::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.reduccion.edit",["reduccion"=>Reduccion::findOrFail($id)]);	
	}
	public function update(ReduccionFormRequest $request, $id)
	{
		$cirugias=Reduccion::findOrFail($id);
		$reduccion->nombre=$request->get('nombre');
		$reduccion->que=$request->get('que');
		$reduccion->pre=$request->get('pre');
		$reduccion->pro=$request->get('pro');
		$reduccion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$reduccion->imagen=$file->getClientOriginalName();
		}
		$reduccion->update();
		return Redirect::to('admin/cirugias/reduccion');
	}
	public function destroy($id)
	{
		$reduccion=Reduccion::findOrFail($id);
		$reduccion->delete();
		return Redirect::to('admin/cirugias/reduccion');
	}
}
