<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Lifting extends Model
{
	protected $table='lifting';

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
