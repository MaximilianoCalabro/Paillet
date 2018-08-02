<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Levantamiento;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\LevantamientoFormRequest;
use DB;

class LevantamientoController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $levantamiento=DB::table('levantamiento')->get();
	    return view('admin.cirugias.levantamiento.index',["levantamiento"=>$levantamiento]);
    }
    public function create()
    {
    	return view ("admin.cirugias.levantamiento.create");
    }
	public function store(LevantamientoFormRequest $request)
	{
		$levantamiento=new Levantamiento;
		$levantamiento->nombre=$request->get('nombre');
		$levantamiento->que=$request->get('que');
		$levantamiento->pre=$request->get('pre');
		$levantamiento->pro=$request->get('pro');
		$levantamiento->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$levantamiento->imagen=$file->getClientOriginalName();
		}
		$levantamiento->save();
		return Redirect::to('admin/cirugias/levantamiento');
	}
	public function show($id)
	{
		return view("admin.cirugias.levantamiento.show",["levantamiento"=>Levantamiento::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.levantamiento.edit",["levantamiento"=>Levantamiento::findOrFail($id)]);	
	}
	public function update(LevantamientoFormRequest $request, $id)
	{
		$cirugias=Levantamiento::findOrFail($id);
		$levantamiento->nombre=$request->get('nombre');
		$levantamiento->que=$request->get('que');
		$levantamiento->pre=$request->get('pre');
		$levantamiento->pro=$request->get('pro');
		$levantamiento->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$levantamiento->imagen=$file->getClientOriginalName();
		}
		$levantamiento->update();
		return Redirect::to('admin/cirugias/levantamiento');
	}
	public function destroy($id)
	{
		$levantamiento=Levantamiento::findOrFail($id);
		$levantamiento->delete();
		return Redirect::to('admin/cirugias/levantamiento');
	}
}
