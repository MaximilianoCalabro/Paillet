<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Clinica;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use paillet\Http\Requests\ClinicaFormRequest;
use DB;

class ClinicaController extends Controller
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
    		$clinica=DB::table('clinica')->get();
    		return view('admin.clinica.index',["clinica"=>$clinica,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.clinica.create");
    }
	public function store(ClinicaFormRequest $request)
	{
		$clinica=new Clinica;
		$clinica->texto=$request->get('texto');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$clinica->imagen=$file->getClientOriginalName();
		}
		$clinica->save();
		return Redirect::to('admin/clinica');
	}
	public function show($id)
	{
		return view("admin.clinica.show",["clinica"=>Clinica::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.clinica.edit",["clinica"=>Clinica::findOrFail($id)]);	
	}
	public function update(ClinicaFormRequest $request, $id)
	{
		$clinica=Clinica::findOrFail($id);
		$clinica->texto=$request->get('texto');
		if (Input::hasFile ('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/img/',$file->getClientOriginalName());
			$clinica->imagen=$file->getClientOriginalName();
		}
		$clinica->update();
		return Redirect::to('admin/clinica');
	}
	public function destroy($id)
	{
		$clinica=Clinica::findOrFail($id);
		$clinica->delete();
		return Redirect::to('admin/clinica');
	}

}
