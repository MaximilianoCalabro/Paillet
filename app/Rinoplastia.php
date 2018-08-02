<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Rinoplastia extends Model
{
	protected $table='rinoplastia';

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
