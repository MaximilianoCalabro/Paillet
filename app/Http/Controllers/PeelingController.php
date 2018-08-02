<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Peeling;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\PeelingFormRequest;
use DB;

class PeelingController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $peeling=DB::table('peeling')->get();
	    return view('admin.cirugias.peeling.index',["peeling"=>$peeling]);
    }
    public function create()
    {
    	return view ("admin.cirugias.peeling.create");
    }
	public function store(PeelingFormRequest $request)
	{
		$peeling=new Peeling;
		$peeling->nombre=$request->get('nombre');
		$peeling->que=$request->get('que');
		$peeling->pre=$request->get('pre');
		$peeling->pro=$request->get('pro');
		$peeling->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$peeling->imagen=$file->getClientOriginalName();
		}
		$peeling->save();
		return Redirect::to('admin/cirugias/peeling');
	}
	public function show($id)
	{
		return view("admin.cirugias.peeling.show",["peeling"=>Peeling::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.peeling.edit",["peeling"=>Peeling::findOrFail($id)]);	
	}
	public function update(PeelingFormRequest $request, $id)
	{
		$cirugias=Peeling::findOrFail($id);
		$peeling->nombre=$request->get('nombre');
		$peeling->que=$request->get('que');
		$peeling->pre=$request->get('pre');
		$peeling->pro=$request->get('pro');
		$peeling->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$peeling->imagen=$file->getClientOriginalName();
		}
		$peeling->update();
		return Redirect::to('admin/cirugias/peeling');
	}
	public function destroy($id)
	{
		$peeling=Peeling::findOrFail($id);
		$peeling->delete();
		return Redirect::to('admin/cirugias/peeling');
	}
}
