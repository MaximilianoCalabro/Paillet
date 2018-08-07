<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Arrugas extends Model
{
	protected $table='lazer';

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
