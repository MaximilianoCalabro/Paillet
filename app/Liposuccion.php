<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Liposuccion extends Model
{
	protected $table='liposuccion';

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
