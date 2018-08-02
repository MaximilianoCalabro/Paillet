<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Orejas extends Model
{
	protected $table='orejas';

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
