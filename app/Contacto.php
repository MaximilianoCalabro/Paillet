<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	protected $table='contacto';

	protected $primaryKey='id_contacto';

	public $timestamps=false;

	protected $fillable =[
		'direccion',
		'telefono',
		'whatsapp',
		'correo'
	];

	protected $guarded =[

	];
}
