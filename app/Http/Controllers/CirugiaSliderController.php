<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\CirugiaSlider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\CirugiaSliderFormRequest;
use DB;

class CirugiaSliderController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$cirugia_slider=DB::table('cirugia_slider')->get();
    		return view('admin.cirugia_slider.index',["cirugia_slider"=>$cirugia_slider,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.cirugia_slider.create");
    }
	public function store(CirugiaSliderFormRequest $request)
	{
		$cirugia_slider=new CirugiaSlider;
		$cirugia_slider->texto=$request->get('texto');
		$cirugia_slider->titulo=$request->get('titulo');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugia_slider->imagen=$file->getClientOriginalName();
		}
		$cirugia_slider->save();
		return Redirect::to('admin/cirugia_slider');
	}
	public function show($id)
	{
		return view("admin.cirugia_slider.show",["cirugia_slider"=>CirugiaSlider::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugia_slider.edit",["cirugia_slider"=>CirugiaSlider::findOrFail($id)]);	
	}
	public function update(CirugiaSliderFormRequest $request, $id)
	{
		$cirugia_slider=CirugiaSlider::findOrFail($id);
		$cirugia_slider->texto=$request->get('texto');
		$cirugia_slider->titulo=$request->get('titulo');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cirugia_slider->imagen=$file->getClientOriginalName();
		}
		$cirugia_slider->update();
		return Redirect::to('admin/cirugia_slider');
	}
	public function destroy($id)
	{
		$cirugia_slider=CirugiaSlider::findOrFail($id);
		$cirugia_slider->delete();
		return Redirect::to('admin/cirugia_slider');
	}

}
