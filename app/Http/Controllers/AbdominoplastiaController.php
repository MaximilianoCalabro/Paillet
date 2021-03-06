<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Abdominoplastia;
use paillet\Slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\AbdominoplastiaFormRequest;
use DB;

class AbdominoplastiaController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
       	if ($request) 
    	{
		    $abdominoplastia=DB::table('abdominoplastia')->get();
		    $slider=DB::table('slider')->get();
		    return view('admin.cirugias.abdominoplastia.index',["abdominoplastia"=>$abdominoplastia, "slider"=>$slider]);
		}
    }
    public function create()
    {
    	return view ("admin.cirugias.abdominoplastia.create");
    }
	public function store(AbdominoplastiaFormRequest $request)
	{
		$abdominoplastia=new Abdominoplastia;
		$abdominoplastia->nombre=$request->get('nombre');
		$abdominoplastia->que=$request->get('que');
		$abdominoplastia->pre=$request->get('pre');
		$abdominoplastia->pro=$request->get('pro');
		$abdominoplastia->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$abdominoplastia->imagen=$file->getClientOriginalName();
		}
		$abdominoplastia->save();
		if (Input::hasFile ('slider')){
			foreach ($request->slider as $img) {
				$slider=new Slider;
				$slider->nombre=$abdominoplastia->nombre;
				$file=$img;
				$file->move(public_path().'/img/slider/',$file->getClientOriginalName());
				$slider->slider=$file->getClientOriginalName();
				$slider->save();
			}
		}
		return Redirect::to('admin/cirugias/abdominoplastia');
	}
	public function show($id)
	{
		return view("admin.cirugias.abdominoplastia.show",["abdominoplastia"=>Abdominoplastia::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugias.abdominoplastia.edit",["abdominoplastia"=>Abdominoplastia::findOrFail($id)]);	
	}
	public function update(AbdominoplastiaFormRequest $request, $id)
	{
		$abdominoplastia=Abdominoplastia::findOrFail($id);
		$abdominoplastia->nombre=$request->get('nombre');
		$abdominoplastia->que=$request->get('que');
		$abdominoplastia->pre=$request->get('pre');
		$abdominoplastia->pro=$request->get('pro');
		$abdominoplastia->post=$request->get('post');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$abdominoplastia->imagen=$file->getClientOriginalName();
		}
		$abdominoplastia->update();
		if (Input::hasFile ('slider')){
			foreach ($request->slider as $img) {
				$slider=new Slider;
				$slider->nombre=$abdominoplastia->nombre;
				$file=$img;
				$file->move(public_path().'/img/slider/',$file->getClientOriginalName());
				$slider->slider=$file->getClientOriginalName();
				$slider->save();
			}
		}
		return Redirect::to('admin/cirugias/abdominoplastia');
	}
	public function destroy($id)
	{
		$abdominoplastia=Abdominoplastia::findOrFail($id);
		$abdominoplastia->delete();
		return Redirect::to('admin/cirugias/abdominoplastia');
	}
}
