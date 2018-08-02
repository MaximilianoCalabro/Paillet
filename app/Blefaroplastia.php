<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Blefaroplastia extends Model
{
	protected $table='blefaroplastia';

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
