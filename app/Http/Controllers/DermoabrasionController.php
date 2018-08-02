<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Dermoabrasion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\DermoabrasionFormRequest;
use DB;

class DermoabrasionController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $dermoabrasion=DB::table('dermoabrasion')->get();
	    return view('admin.cirugias.dermoabrasion.index',["dermoabrasion"=>$dermoabrasion]);
    }
    public function create()
    {
    	return view ("admin.cirugias.dermoabrasion.create");
    }
	public function store(DermoabrasionFormRequest $request)
	{
		$dermoabrasion=new Dermoabrasion;
		$dermoabrasion->nombre=$request->get('nombre');
		$dermoabrasion->que=$request->get('que');
		$dermoabrasion->pre=$request->get('pre');
		$dermoabrasion->pro=$request->get('pro');
		$dermoabrasion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$dermoabrasion->imagen=$file->getClientOriginalName();
		}
		$dermoabrasion->save();
		return Redirect::to('admin/cirugias/dermoabrasion');
	}
	public function show($id)
	{
		return view("admin.cirugias.dermoabrasion.show",["dermoabrasion"=>Dermoabrasion::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.dermoabrasion.edit",["dermoabrasion"=>Dermoabrasion::findOrFail($id)]);	
	}
	public function update(DermoabrasionFormRequest $request, $id)
	{
		$dermoabrasion=Dermoabrasion::findOrFail($id);
		$dermoabrasion->nombre=$request->get('nombre');
		$dermoabrasion->que=$request->get('que');
		$dermoabrasion->pre=$request->get('pre');
		$dermoabrasion->pro=$request->get('pro');
		$dermoabrasion->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$dermoabrasion->imagen=$file->getClientOriginalName();
		}
		$dermoabrasion->update();
		return Redirect::to('admin/cirugias/dermoabrasion');
	}
	public function destroy($id)
	{
		$dermoabrasion=Dermoabrasion::findOrFail($id);
		$dermoabrasion->delete();
		return Redirect::to('admin/cirugias/dermoabrasion');
	}
}
