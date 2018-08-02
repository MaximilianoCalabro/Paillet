<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Capilar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\CapilarFormRequest;
use DB;

class CapilarController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $capilar=DB::table('capilar')->get();
	    return view('admin.cirugias.capilar.index',["capilar"=>$capilar]);
    }
    public function create()
    {
    	return view ("admin.cirugias.capilar.create");
    }
	public function store(CapilarFormRequest $request)
	{
		$capilar=new Capilar;
		$capilar->nombre=$request->get('nombre');
		$capilar->que=$request->get('que');
		$capilar->pre=$request->get('pre');
		$capilar->pro=$request->get('pro');
		$capilar->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$capilar->imagen=$file->getClientOriginalName();
		}
		$capilar->save();
		return Redirect::to('admin/cirugias/capilar');
	}
	public function show($id)
	{
		return view("admin.cirugias.capilar.show",["capilar"=>Capilar::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.capilar.edit",["capilar"=>Capilar::findOrFail($id)]);	
	}
	public function update(CapilarFormRequest $request, $id)
	{
		$capilar=Capilar::findOrFail($id);
		$capilar->nombre=$request->get('nombre');
		$capilar->que=$request->get('que');
		$capilar->pre=$request->get('pre');
		$capilar->pro=$request->get('pro');
		$capilar->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$capilar->imagen=$file->getClientOriginalName();
		}
		$capilar->update();
		return Redirect::to('admin/cirugias/capilar');
	}
	public function destroy($id)
	{
		$capilar=Capilar::findOrFail($id);
		$capilar->delete();
		return Redirect::to('admin/cirugias/capilar');
	}
}
