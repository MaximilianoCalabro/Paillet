<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Abdominoplastia extends Model
{
	protected $table='abdominoplastia';

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
