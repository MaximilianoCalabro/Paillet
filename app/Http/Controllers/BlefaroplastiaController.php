<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Blefaroplastia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\BlefaroplastiaFormRequest;
use DB;

class BlefaroplastiaController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $blefaroplastia=DB::table('blefaroplastia')->get();
	    return view('admin.cirugias.blefaroplastia.index',["blefaroplastia"=>$blefaroplastia]);
    }
    public function create()
    {
    	return view ("admin.cirugias.blefaroplastia.create");
    }
	public function store(BlefaroplastiaFormRequest $request)
	{
		$blefaroplastia=new Blefaroplastia;
		$blefaroplastia->nombre=$request->get('nombre');
		$blefaroplastia->que=$request->get('que');
		$blefaroplastia->pre=$request->get('pre');
		$blefaroplastia->pro=$request->get('pro');
		$blefaroplastia->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$blefaroplastia->imagen=$file->getClientOriginalName();
		}
		$blefaroplastia->save();
		return Redirect::to('admin/cirugias/blefaroplastia');
	}
	public function show($id)
	{
		return view("admin.cirugias.blefaroplastia.show",["blefaroplastia"=>Blefaroplastia::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.blefaroplastia.edit",["blefaroplastia"=>Blefaroplastia::findOrFail($id)]);	
	}
	public function update(BlefaroplastiaFormRequest $request, $id)
	{
		$blefaroplastia=Blefaroplastia::findOrFail($id);
		$blefaroplastia->nombre=$request->get('nombre');
		$blefaroplastia->que=$request->get('que');
		$blefaroplastia->pre=$request->get('pre');
		$blefaroplastia->pro=$request->get('pro');
		$blefaroplastia->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$blefaroplastia->imagen=$file->getClientOriginalName();
		}
		$blefaroplastia->save();
		return Redirect::to('admin/cirugias/blefaroplastia');
	}
	public function destroy($id)
	{
		$blefaroplastia=Blefaroplastia::findOrFail($id);
		$blefaroplastia->delete();
		return Redirect::to('admin/cirugias/blefaroplastia');
	}
}
