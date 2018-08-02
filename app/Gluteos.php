<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Gluteos extends Model
{
	protected $table='gluteos';

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
