<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Reconstruccion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\ReconstruccionFormRequest;
use DB;

class ReconstruccionController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $reconstruccion=DB::table('reconstruccion_mamario')->get();
	    return view('admin.cirugias.reconstruccion.index',["reconstruccion"=>$reconstruccion]);
    }
    public function create()
    {
    	return view ("admin.cirugias.reconstruccion.create");
    }
	public function store(ReconstruccionFormRequest $request)
	{
		$reconstruccion=new Reconstruccion;
		$reconstruccion->nombre=$request->get('nombre');
		$reconstruccion->que=$request->get('que');
		$reconstruccion->pre=$request->get('pre');
		$reconstruccion->pro=$request->get('pro');
		$reconstruccion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(base_path().'/img/',$file->getClientOriginalName());
			$reconstruccion->imagen=$file->getClientOriginalName();
		}
		$reconstruccion->save();
		return Redirect::to('admin/cirugias/reconstruccion');
	}
	public function show($id)
	{
		return view("admin.cirugias.reconstruccion.show",["reconstruccion"=>Reconstruccion::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.reconstruccion.edit",["reconstruccion"=>Reconstruccion::findOrFail($id)]);	
	}
	public function update(ReconstruccionFormRequest $request, $id)
	{
		$reconstruccion=Reconstruccion::findOrFail($id);
		$reconstruccion->nombre=$request->get('nombre');
		$reconstruccion->que=$request->get('que');
		$reconstruccion->pre=$request->get('pre');
		$reconstruccion->pro=$request->get('pro');
		$reconstruccion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(base_path().'/img/',$file->getClientOriginalName());
			$reconstruccion->imagen=$file->getClientOriginalName();
		}
		$reconstruccion->update();
		return Redirect::to('admin/cirugias/reconstruccion');
	}
	public function destroy($id)
	{
		$reconstruccion=Reconstruccion::findOrFail($id);
		$reconstruccion->delete();
		return Redirect::to('admin/cirugias/reconstruccion');
	}
}
