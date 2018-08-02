<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Pantorrillas extends Model
{
	protected $table='pantorrillas';

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
