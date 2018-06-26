<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Cirugias extends Model
{
	protected $table='cirugias';

	protected $primaryKey='id_cirugias';

	public $timestamps=false;

	protected $fillable =[
		'nombre',
		'que_es',
		'pre_ope',
		'procedimientos',
		'post_ope',
		'imagen',
		'imagen_slider'
	];

	protected $guarded =[

	];
}
