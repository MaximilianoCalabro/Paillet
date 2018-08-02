<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\CvPlastica;
use Illuminate\Support\Facades\Redirect;
use paillet\Http\Requests\CvPlasticaFormRequest;
use DB;

class CvPlasticaController extends Controller
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
    		$cv_plastica=DB::table('cv_plastica')->get();
    		return view('admin.cv_plastica.index',["cv_plastica"=>$cv_plastica,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.cv_plastica.create");
    }
	public function store(CvPlasticaFormRequest $request)
	{
		$cv_plastica=new CvPlastica;
		$cv_plastica->texto=$request->get('texto');
		$cv_plastica->save();
		return Redirect::to('admin/cv_plastica');
	}
	public function show($id)
	{
		return view("admin.cv_plastica.show",["cv_plastica"=>CvPlastica::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cv_plastica.edit",["cv_plastica"=>CvPlastica::findOrFail($id)]);	
	}
	public function update(CvPlasticaFormRequest $request, $id)
	{
		$cv_plastica=CvPlastica::findOrFail($id);
		$cv_plastica->texto=$request->get('texto');
		$cv_plastica->update();
		return Redirect::to('admin/cv_plastica');
	}
	public function destroy($id)
	{
		$cv_plastica=CvPlastica::findOrFail($id);
		$cv_plastica->delete();
		return Redirect::to('admin/cv_plastica');
	}
}
