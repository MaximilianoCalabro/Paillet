<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Arrugas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\ArrugasFormRequest;
use DB;

class ArrugasController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $arrugas=DB::table('arrugas')->get();
	    return view('admin.cirugias.arrugas.index',["arrugas"=>$arrugas]);
    }
    public function create()
    {
    	return view ("admin.cirugias.arrugas.create");
    }
	public function store(ArrugasFormRequest $request)
	{
		$arrugas=new Arrugas;
		$arrugas->nombre=$request->get('nombre');
		$arrugas->que=$request->get('que');
		$arrugas->pre=$request->get('pre');
		$arrugas->pro=$request->get('pro');
		$arrugas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$arrugas->imagen=$file->getClientOriginalName();
		}
		$arrugas->save();
		return Redirect::to('admin/cirugias/arrugas');
	}
	public function show($id)
	{
		return view("admin.cirugias.arrugas.show",["arrugas"=>Arrugas::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.arrugas.edit",["arrugas"=>Arrugas::findOrFail($id)]);	
	}
	public function update(ArrugasFormRequest $request, $id)
	{
		$arrugas=Arrugas::findOrFail($id);
		$arrugas->nombre=$request->get('nombre');
		$arrugas->que=$request->get('que');
		$arrugas->pre=$request->get('pre');
		$arrugas->pro=$request->get('pro');
		$arrugas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$arrugas->imagen=$file->getClientOriginalName();
		}
		$arrugas->update();
		return Redirect::to('admin/cirugias/arrugas');
	}
	public function destroy($id)
	{
		$arrugas=Arrugas::findOrFail($id);
		$arrugas->delete();
		return Redirect::to('admin/cirugias/arrugas');
	}
}
