<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Aumento extends Model
{
	protected $table='aumento_mamario';

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
