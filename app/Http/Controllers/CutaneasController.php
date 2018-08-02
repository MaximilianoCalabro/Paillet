<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Cutaneas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\CutaneasFormRequest;
use DB;

class CutaneasController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $cutaneas=DB::table('cutaneas')->get();
	    return view('admin.cirugias.cutaneas.index',["cutaneas"=>$cutaneas]);
    }
    public function create()
    {
    	return view ("admin.cirugias.cutaneas.create");
    }
	public function store(CutaneasFormRequest $request)
	{
		$cutaneas=new Cutaneas;
		$cutaneas->nombre=$request->get('nombre');
		$cutaneas->que=$request->get('que');
		$cutaneas->pre=$request->get('pre');
		$cutaneas->pro=$request->get('pro');
		$cutaneas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cutaneas->imagen=$file->getClientOriginalName();
		}
		$cutaneas->save();
		return Redirect::to('admin/cirugias/cutaneas');
	}
	public function show($id)
	{
		return view("admin.cirugias.cutaneas.show",["cutaneas"=>Cutaneas::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.cutaneas.edit",["cutaneas"=>Cutaneas::findOrFail($id)]);	
	}
	public function update(CutaneasFormRequest $request, $id)
	{
		$cutaneas=Cutaneas::findOrFail($id);
		$cutaneas->nombre=$request->get('nombre');
		$cutaneas->que=$request->get('que');
		$cutaneas->pre=$request->get('pre');
		$cutaneas->pro=$request->get('pro');
		$cutaneas->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cutaneas->imagen=$file->getClientOriginalName();
		}
		$cutaneas->update();
		return Redirect::to('admin/cirugias/cutaneas');
	}
	public function destroy($id)
	{
		$cutaneas=Cutaneas::findOrFail($id);
		$cutaneas->delete();
		return Redirect::to('admin/cirugias/cutaneas');
	}
}
