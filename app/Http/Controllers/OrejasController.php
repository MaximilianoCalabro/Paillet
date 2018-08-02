<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Orejas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\OrejasFormRequest;
use DB;

class OrejasController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $orejas=DB::table('orejas')->get();
	    return view('admin.cirugias.orejas.index',["orejas"=>$orejas]);
    }
    public function create()
    {
    	return view ("admin.cirugias.orejas.create");
    }
	public function store(OrejasFormRequest $request)
	{
		$orejas=new Orejas;
		$orejas->nombre=$request->get('nombre');
		$orejas->que=$request->get('que');
		$orejas->pre=$request->get('pre');
		$orejas->pro=$request->get('pro');
		$orejas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$orejas->imagen=$file->getClientOriginalName();
		}
		$orejas->save();
		return Redirect::to('admin/cirugias/orejas');
	}
	public function show($id)
	{
		return view("admin.cirugias.orejas.show",["orejas"=>Orejas::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.orejas.edit",["orejas"=>Orejas::findOrFail($id)]);	
	}
	public function update(OrejasFormRequest $request, $id)
	{
		$cirugias=Orejas::findOrFail($id);
		$orejas->nombre=$request->get('nombre');
		$orejas->que=$request->get('que');
		$orejas->pre=$request->get('pre');
		$orejas->pro=$request->get('pro');
		$orejas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$orejas->imagen=$file->getClientOriginalName();
		}
		$orejas->update();
		return Redirect::to('admin/cirugias/orejas');
	}
	public function destroy($id)
	{
		$orejas=Orejas::findOrFail($id);
		$orejas->delete();
		return Redirect::to('admin/cirugias/orejas');
	}
}
