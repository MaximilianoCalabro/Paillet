<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Brazos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\BrazosFormRequest;
use DB;

class BrazosController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
	    $brazos=DB::table('brazos_mamario')->get();
	    return view('admin.cirugias.brazos.index',["brazos"=>$brazos]);
    }
    public function create()
    {
    	return view ("admin.cirugias.brazos.create");
    }
	public function store(BrazosFormRequest $request)
	{
		$brazos=new Brazos;
		$brazos->nombre=$request->get('nombre');
		$brazos->que=$request->get('que');
		$brazos->pre=$request->get('pre');
		$brazos->pro=$request->get('pro');
		$brazos->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(base_path().'/img/',$file->getClientOriginalName());
			$brazos->imagen=$file->getClientOriginalName();
		}
		$brazos->save();
		return Redirect::to('admin/cirugias/brazos');
	}
	public function show($id)
	{
		return view("admin.cirugias.brazos.show",["brazos"=>Brazos::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.brazos.edit",["brazos"=>Brazos::findOrFail($id)]);	
	}
	public function update(BrazosFormRequest $request, $id)
	{
		$brazos=Brazos::findOrFail($id);
		$brazos->nombre=$request->get('nombre');
		$brazos->que=$request->get('que');
		$brazos->pre=$request->get('pre');
		$brazos->pro=$request->get('pro');
		$brazos->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(base_path().'/img/',$file->getClientOriginalName());
			$brazos->imagen=$file->getClientOriginalName();
		}
		$brazos->update();
		return Redirect::to('admin/cirugias/brazos');
	}
	public function destroy($id)
	{
		$brazos=Brazos::findOrFail($id);
		$brazos->delete();
		return Redirect::to('admin/cirugias/brazos');
	}
}
