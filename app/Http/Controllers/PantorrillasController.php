<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Pantorrillas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\PantorrillasFormRequest;
use DB;

class PantorrillasController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $pantorrillas=DB::table('pantorrillas')->get();
	    return view('admin.cirugias.pantorrillas.index',["pantorrillas"=>$pantorrillas]);
    }
    public function create()
    {
    	return view ("admin.cirugias.pantorrillas.create");
    }
	public function store(PantorrillasFormRequest $request)
	{
		$pantorrillas=new Pantorrillas;
		$pantorrillas->nombre=$request->get('nombre');
		$pantorrillas->que=$request->get('que');
		$pantorrillas->pre=$request->get('pre');
		$pantorrillas->pro=$request->get('pro');
		$pantorrillas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$pantorrillas->imagen=$file->getClientOriginalName();
		}
		$pantorrillas->save();
		return Redirect::to('admin/cirugias/pantorrillas');
	}
	public function show($id)
	{
		return view("admin.cirugias.pantorrillas.show",["pantorrillas"=>Pantorrillas::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.pantorrillas.edit",["pantorrillas"=>Pantorrillas::findOrFail($id)]);	
	}
	public function update(PantorrillasFormRequest $request, $id)
	{
		$cirugias=Pantorrillas::findOrFail($id);
		$pantorrillas->nombre=$request->get('nombre');
		$pantorrillas->que=$request->get('que');
		$pantorrillas->pre=$request->get('pre');
		$pantorrillas->pro=$request->get('pro');
		$pantorrillas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$pantorrillas->imagen=$file->getClientOriginalName();
		}
		$pantorrillas->update();
		return Redirect::to('admin/cirugias/pantorrillas');
	}
	public function destroy($id)
	{
		$pantorrillas=Pantorrillas::findOrFail($id);
		$pantorrillas->delete();
		return Redirect::to('admin/cirugias/pantorrillas');
	}
}
