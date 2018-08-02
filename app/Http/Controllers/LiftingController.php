<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Lifting;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\LiftingFormRequest;
use DB;

class LiftingController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $lifting=DB::table('lifting')->get();
	    return view('admin.cirugias.lifting.index',["lifting"=>$lifting]);
    }
    public function create()
    {
    	return view ("admin.cirugias.lifting.create");
    }
	public function store(LiftingFormRequest $request)
	{
		$lifting=new Lifting;
		$lifting->nombre=$request->get('nombre');
		$lifting->que=$request->get('que');
		$lifting->pre=$request->get('pre');
		$lifting->pro=$request->get('pro');
		$lifting->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$lifting->imagen=$file->getClientOriginalName();
		}
		$lifting->save();
		return Redirect::to('admin/cirugias/lifting');
	}
	public function show($id)
	{
		return view("admin.cirugias.lifting.show",["lifting"=>Lifting::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.lifting.edit",["lifting"=>Lifting::findOrFail($id)]);	
	}
	public function update(Lifting $request, $id)
	{
		$cirugias=Lifting::findOrFail($id);
		$lifting->nombre=$request->get('nombre');
		$lifting->que=$request->get('que');
		$lifting->pre=$request->get('pre');
		$lifting->pro=$request->get('pro');
		$lifting->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$lifting->imagen=$file->getClientOriginalName();
		}
		$lifting->update();
		return Redirect::to('admin/cirugias/lifting');
	}
	public function destroy($id)
	{
		$lifting=Lifting::findOrFail($id);
		$lifting->delete();
		return Redirect::to('admin/cirugias/lifting');
	}
}
