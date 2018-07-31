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
    	$this->middleware('auth');
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$cv=DB::table('cv')->get();
    		return view('admin.cv.index',["cv"=>$cv,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.cv.create");
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
		return Redirect::to('admin/cv');
	}
	public function show($id)
	{
		return view("admin.cv.show",["cv"=>Cv::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cv.edit",["cv"=>Cv::findOrFail($id)]);	
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
		return Redirect::to('admin/cv');
	}
	public function destroy($id)
	{
		$cv=Cv::findOrFail($id);
		$cv->delete();
		return Redirect::to('admin/cv');
	}

}
