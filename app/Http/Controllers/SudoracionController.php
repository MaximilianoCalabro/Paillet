<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Sudoracion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\SudoracionFormRequest;
use DB;

class SudoracionController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $sudoracion=DB::table('sudoracion')->get();
	    return view('admin.cirugias.sudoracion.index',["sudoracion"=>$sudoracion]);
    }
    public function create()
    {
    	return view ("admin.cirugias.sudoracion.create");
    }
	public function store(SudoracionFormRequest $request)
	{
		$sudoracion=new Sudoracion;
		$sudoracion->nombre=$request->get('nombre');
		$sudoracion->que=$request->get('que');
		$sudoracion->pre=$request->get('pre');
		$sudoracion->pro=$request->get('pro');
		$sudoracion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$sudoracion->imagen=$file->getClientOriginalName();
		}
		$sudoracion->save();
		return Redirect::to('admin/cirugias/sudoracion');
	}
	public function show($id)
	{
		return view("admin.cirugias.sudoracion.show",["sudoracion"=>Sudoracion::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.sudoracion.edit",["sudoracion"=>Sudoracion::findOrFail($id)]);	
	}
	public function update(SudoracionFormRequest $request, $id)
	{
		$cirugias=Sudoracion::findOrFail($id);
		$sudoracion->nombre=$request->get('nombre');
		$sudoracion->que=$request->get('que');
		$sudoracion->pre=$request->get('pre');
		$sudoracion->pro=$request->get('pro');
		$sudoracion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$sudoracion->imagen=$file->getClientOriginalName();
		}
		$sudoracion->update();
		return Redirect::to('admin/cirugias/sudoracion');
	}
	public function destroy($id)
	{
		$sudoracion=Sudoracion::findOrFail($id);
		$sudoracion->delete();
		return Redirect::to('admin/cirugias/sudoracion');
	}
}
