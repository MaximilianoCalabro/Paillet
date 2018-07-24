<?php

namespace paillet\Http\Controllers;

use Illuminate\Http\Request;
use paillet\Contacto;
use Illuminate\Support\Facades\Redirect;
use paillet\Http\Requests\ContactoFormRequest;
use DB;

class ContactoController extends Controller
{
    public function __construct()
    {
		
    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$contacto=DB::table('contacto')->get();
    		return view('admin.contacto.index',["contacto"=>$contacto,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view ("admin.contacto.create");
    }
	public function store(ContactoFormRequest $request)
	{
		$contacto=new Contacto;
		$contacto->direccion=$request->get('direccion');
		$contacto->telefono=$request->get('telefono');
		$contacto->whatsapp=$request->get('whatsapp');
		$contacto->correo=$request->get('correo');
		$contacto->save();
		return Redirect::to('admin/contacto');
	}
	public function show($id)
	{
		return view("admin.contacto.show",["contacto"=>Contacto::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view("admin.contacto.edit",["contacto"=>Contacto::findOrFail($id)]);	
	}
	public function update(ContactoFormRequest $request, $id)
	{
		$contacto=Contacto::findOrFail($id);
		$contacto->direccion=$request->get('direccion');
		$contacto->telefono=$request->get('telefono');
		$contacto->whatsapp=$request->get('whatsapp');
		$contacto->correo=$request->get('correo');
		$contacto->update();
		return Redirect::to('admin/contacto');
	}
	public function destroy($id)
	{
		$contacto=Contacto::findOrFail($id);
		$contacto->delete();
		return Redirect::to('admin/contacto');
	}

}
