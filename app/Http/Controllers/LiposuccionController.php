<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Liposuccion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\LiposuccionFormRequest;
use DB;

class LiposuccionController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $liposuccion=DB::table('liposuccion')->get();
	    return view('admin.cirugias.liposuccion.index',["liposuccion"=>$liposuccion]);
    }
    public function create()
    {
    	return view ("admin.cirugias.liposuccion.create");
    }
	public function store(LiposuccionFormRequest $request)
	{
		$liposuccion=new Liposuccion;
		$liposuccion->nombre=$request->get('nombre');
		$liposuccion->que=$request->get('que');
		$liposuccion->pre=$request->get('pre');
		$liposuccion->pro=$request->get('pro');
		$liposuccion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$liposuccion->imagen=$file->getClientOriginalName();
		}
		$liposuccion->save();
		return Redirect::to('admin/cirugias/liposuccion');
	}
	public function show($id)
	{
		return view("admin.cirugias.liposuccion.show",["liposuccion"=>Liposuccion::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.liposuccion.edit",["liposuccion"=>Liposuccion::findOrFail($id)]);	
	}
	public function update(LiposuccionFormRequest $request, $id)
	{
		$cirugias=Liposuccion::findOrFail($id);
		$liposuccion->nombre=$request->get('nombre');
		$liposuccion->que=$request->get('que');
		$liposuccion->pre=$request->get('pre');
		$liposuccion->pro=$request->get('pro');
		$liposuccion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$liposuccion->imagen=$file->getClientOriginalName();
		}
		$liposuccion->update();
		return Redirect::to('admin/cirugias/liposuccion');
	}
	public function destroy($id)
	{
		$liposuccion=Liposuccion::findOrFail($id);
		$liposuccion->delete();
		return Redirect::to('admin/cirugias/liposuccion');
	}
}
