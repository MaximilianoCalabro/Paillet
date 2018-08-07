<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Lazer;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\LazerFormRequest;
use DB;

class LazerController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $lazer=DB::table('lazer_mamario')->get();
	    return view('admin.cirugias.lazer.index',["lazer"=>$lazer]);
    }
    public function create()
    {
    	return view ("admin.cirugias.lazer.create");
    }
	public function store(LazerFormRequest $request)
	{
		$lazer=new Lazer;
		$lazer->nombre=$request->get('nombre');
		$lazer->que=$request->get('que');
		$lazer->pre=$request->get('pre');
		$lazer->pro=$request->get('pro');
		$lazer->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(base_path().'/img/',$file->getClientOriginalName());
			$lazer->imagen=$file->getClientOriginalName();
		}
		$lazer->save();
		return Redirect::to('admin/cirugias/lazer');
	}
	public function show($id)
	{
		return view("admin.cirugias.lazer.show",["lazer"=>Lazer::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.lazer.edit",["lazer"=>Lazer::findOrFail($id)]);	
	}
	public function update(LazerFormRequest $request, $id)
	{
		$lazer=Lazer::findOrFail($id);
		$lazer->nombre=$request->get('nombre');
		$lazer->que=$request->get('que');
		$lazer->pre=$request->get('pre');
		$lazer->pro=$request->get('pro');
		$lazer->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(base_path().'/img/',$file->getClientOriginalName());
			$lazer->imagen=$file->getClientOriginalName();
		}
		$lazer->update();
		return Redirect::to('admin/cirugias/lazer');
	}
	public function destroy($id)
	{
		$lazer=Lazer::findOrFail($id);
		$lazer->delete();
		return Redirect::to('admin/cirugias/lazer');
	}
}
