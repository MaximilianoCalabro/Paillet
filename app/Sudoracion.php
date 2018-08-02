<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Sudoracion extends Model
{
	protected $table='sudoracion';

	protected $primaryKey='id';

	public $timestamps=false;

	protected $fillable =[
		'nombre',
		'que',
		'pre',
		'pro',
		'post',
		'imagen'
	];

	protected $guarded =[

	];
}
