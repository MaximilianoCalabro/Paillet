<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Capilar extends Model
{
	protected $table='capilar';

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
