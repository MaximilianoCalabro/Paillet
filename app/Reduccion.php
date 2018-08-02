<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Reduccion extends Model
{
	protected $table='reduccion_mamario';

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
