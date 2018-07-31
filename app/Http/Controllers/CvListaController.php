<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\CvLista;
use Illuminate\Support\Facades\Redirect;
use paillet\Http\Requests\CvListaFormRequest;
use DB;

class CvListaController extends Controller
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
    		$cv_lista=DB::table('cv_lista')->get();
    		return view('admin.cv_lista.index',["cv_lista"=>$cv_lista,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.cv_lista.create");
    }
	public function store(CvListaFormRequest $request)
	{
		$cv_lista=new CvLista;
		$cv_lista->texto=$request->get('texto');
		$cv_lista->save();
		return Redirect::to('admin/cv_lista');
	}
	public function show($id)
	{
		return view("admin.cv_lista.show",["cv_lista"=>CvLista::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cv_lista.edit",["cv_lista"=>CvLista::findOrFail($id)]);	
	}
	public function update(CvListaFormRequest $request, $id)
	{
		$cv_lista=CvLista::findOrFail($id);
		$cv_lista->texto=$request->get('texto');
		$cv_lista->update();
		return Redirect::to('admin/cv_lista');
	}
	public function destroy($id)
	{
		$cv_lista=CvLista::findOrFail($id);
		$cv_lista->delete();
		return Redirect::to('admin/cv_lista');
	}
}
