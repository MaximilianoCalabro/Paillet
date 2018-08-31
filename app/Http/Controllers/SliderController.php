<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\SliderFormRequest;
use DB;

class SliderController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$slider=DB::table('slider')->get();
    		return view('admin.cirugias.slider.index',["slider"=>$slider]);
    	}
    }
    public function create()
    {
    	return view ("admin.cirugias.create");
    }
	public function store(SliderFormRequest $request)
	{
		$slider=new Slider;
		if (Input::hasFile ('slider')){
			$file=Input::file('slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$slider->slider=$file->getClientOriginalName();
		}
		$slider->save();
		return Redirect::to('noticias/slider');
	}
	public function show($id)
	{
		return view("noticias.slider.show",["slider"=>Slider::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("noticias.slider.edit",["slider"=>Slider::findOrFail($id)]);	
	}
	public function update(SliderFormRequest $request, $id)
	{
		$slider=Slider::findOrFail($id);
		if (Input::hasFile ('slider')){
			$file=Input::file('slider');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$slider->slider=$file->getClientOriginalName();
		}
		$slider->update();
		return Redirect::to('noticias/slider');
	}
	public function destroy($id)
	{
		$slider=Slider::findOrFail($id);
		$slider->delete();
		return Redirect::to('noticias/inicio');
	}
}
