<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Aumento;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\AumentoFormRequest;
use DB;

class AumentoController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $aumento=DB::table('aumento_mamario')->get();
	    return view('admin.cirugias.aumento.index',["aumento"=>$aumento]);
    }
    public function create()
    {
    	return view ("admin.cirugias.aumento.create");
    }
	public function store(AumentoFormRequest $request)
	{
		$aumento=new Aumento;
		$aumento->nombre=$request->get('nombre');
		$aumento->que=$request->get('que');
		$aumento->pre=$request->get('pre');
		$aumento->pro=$request->get('pro');
		$aumento->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$aumento->imagen=$file->getClientOriginalName();
		}
		$aumento->save();
		return Redirect::to('admin/cirugias/aumento');
	}
	public function show($id)
	{
		return view("admin.cirugias.aumento.show",["aumento"=>Aumento::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.aumento.edit",["aumento"=>Aumento::findOrFail($id)]);	
	}
	public function update(AumentoFormRequest $request, $id)
	{
		$aumento=Aumento::findOrFail($id);
		$aumento->nombre=$request->get('nombre');
		$aumento->que=$request->get('que');
		$aumento->pre=$request->get('pre');
		$aumento->pro=$request->get('pro');
		$aumento->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$aumento->imagen=$file->getClientOriginalName();
		}
		$aumento->update();
		return Redirect::to('admin/cirugias/aumento');
	}
	public function destroy($id)
	{
		$aumento=Aumento::findOrFail($id);
		$aumento->delete();
		return Redirect::to('admin/cirugias/aumento');
	}
}
