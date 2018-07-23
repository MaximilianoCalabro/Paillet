<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Cv;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\CvFormRequest;
use DB;

class CvController extends Controller
{
    public function __construct()
    {
		
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$cv=DB::table('cv')->get();
    		return view('cv.configurar_cv.index',["cv"=>$cv,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("cv.configurar_cv.create");
    }
	public function store(CvFormRequest $request)
	{
		$cv=new Cv;
		$cv->texto=$request->get('texto');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cv->imagen=$file->getClientOriginalName();
		}
		$cv->save();
		return Redirect::to('cv/configurar_cv');
	}
	public function show($id)
	{
		return view("cv.configurar_cv.show",["cv"=>Cv::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("cv.configurar_cv.edit",["cv"=>Cv::findOrFail($id)]);	
	}
	public function update(CvFormRequest $request, $id)
	{
		$cv=Cv::findOrFail($id);
		$cv->texto=$request->get('texto');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$cv->imagen=$file->getClientOriginalName();
		}
		$cv->update();
		return Redirect::to('cv/configurar_cv');
	}
	public function destroy($id)
	{
		$cv=Cv::findOrFail($id);
		$cv->delete();
		return Redirect::to('cv/configurar_cv');
	}

}
