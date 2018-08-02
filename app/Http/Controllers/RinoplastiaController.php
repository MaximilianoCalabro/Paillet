<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Rinoplastia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\RinoplastiaFormRequest;
use DB;

class RinoplastiaController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $rinoplastia=DB::table('rinoplastia')->get();
	    return view('admin.cirugias.rinoplastia.index',["rinoplastia"=>$rinoplastia]);
    }
    public function create()
    {
    	return view ("admin.cirugias.rinoplastia.create");
    }
	public function store(RinoplastiaFormRequest $request)
	{
		$rinoplastia=new Rinoplastia;
		$rinoplastia->nombre=$request->get('nombre');
		$rinoplastia->que=$request->get('que');
		$rinoplastia->pre=$request->get('pre');
		$rinoplastia->pro=$request->get('pro');
		$rinoplastia->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$rinoplastia->imagen=$file->getClientOriginalName();
		}
		$rinoplastia->save();
		return Redirect::to('admin/cirugias/rinoplastia');
	}
	public function show($id)
	{
		return view("admin.cirugias.rinoplastia.show",["rinoplastia"=>Rinoplastia::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.rinoplastia.edit",["rinoplastia"=>Rinoplastia::findOrFail($id)]);	
	}
	public function update(RinoplastiaFormRequest $request, $id)
	{
		$cirugias=Rinoplastia::findOrFail($id);
		$rinoplastia->nombre=$request->get('nombre');
		$rinoplastia->que=$request->get('que');
		$rinoplastia->pre=$request->get('pre');
		$rinoplastia->pro=$request->get('pro');
		$rinoplastia->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$rinoplastia->imagen=$file->getClientOriginalName();
		}
		$rinoplastia->update();
		return Redirect::to('admin/cirugias/rinoplastia');
	}
	public function destroy($id)
	{
		$rinoplastia=Rinoplastia::findOrFail($id);
		$rinoplastia->delete();
		return Redirect::to('admin/cirugias/rinoplastia');
	}
}
