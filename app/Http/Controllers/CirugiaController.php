<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Cirugia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\CirugiaFormRequest;
use DB;

class CirugiaController extends Controller
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
    		$cirugia=DB::table('cirugia')->get();
    		return view('admin.cirugia.index',["cirugia"=>$cirugia,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.cirugia.create");
    }
	public function store(CirugiaFormRequest $request)
	{
		$cirugia=new Cirugia;
		$cirugia->texto=$request->get('texto');
		$cirugia->titulo=$request->get('titulo');
		$cirugia->save();
		return Redirect::to('admin/cirugia');
	}
	public function show($id)
	{
		return view("admin.cirugia.show",["cirugia"=>Cirugia::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.cirugia.edit",["cirugia"=>Cirugia::findOrFail($id)]);	
	}
	public function update(CirugiaFormRequest $request, $id)
	{
		$cirugia=Cirugia::findOrFail($id);
		$cirugia->texto=$request->get('texto');
		$cirugia->titulo=$request->get('titulo');
		$cirugia->update();
		return Redirect::to('admin/cirugia');
	}
	public function destroy($id)
	{
		$cirugia=Cirugia::findOrFail($id);
		$cirugia->delete();
		return Redirect::to('admin/cirugia');
	}

}
