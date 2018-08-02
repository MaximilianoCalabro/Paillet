<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Peeling extends Model
{
	protected $table='peeling';

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
