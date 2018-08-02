<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Gluteos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\GluteosFormRequest;
use DB;

class GluteosController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $gluteos=DB::table('gluteos')->get();
	    return view('admin.cirugias.gluteos.index',["gluteos"=>$gluteos]);
    }
    public function create()
    {
    	return view ("admin.cirugias.gluteos.create");
    }
	public function store(GluteosFormRequest $request)
	{
		$gluteos=new Gluteos;
		$gluteos->nombre=$request->get('nombre');
		$gluteos->que=$request->get('que');
		$gluteos->pre=$request->get('pre');
		$gluteos->pro=$request->get('pro');
		$gluteos->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$gluteos->imagen=$file->getClientOriginalName();
		}
		$gluteos->save();
		return Redirect::to('admin/cirugias/gluteos');
	}
	public function show($id)
	{
		return view("admin.cirugias.gluteos.show",["gluteos"=>Gluteos::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.gluteos.edit",["gluteos"=>Gluteos::findOrFail($id)]);	
	}
	public function update(GluteosFormRequest $request, $id)
	{
		$gluteos=Gluteos::findOrFail($id);
		$gluteos->nombre=$request->get('nombre');
		$gluteos->que=$request->get('que');
		$gluteos->pre=$request->get('pre');
		$gluteos->pro=$request->get('pro');
		$gluteos->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$gluteos->imagen=$file->getClientOriginalName();
		}
		$gluteos->update();
		return Redirect::to('admin/cirugias/gluteos');
	}
	public function destroy($id)
	{
		$gluteos=Gluteos::findOrFail($id);
		$gluteos->delete();
		return Redirect::to('admin/cirugias/gluteos');
	}
}
