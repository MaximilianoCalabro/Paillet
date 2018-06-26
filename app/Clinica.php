<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
	protected $table='clinica';

	protected $primaryKey='id_clinica';

	public $timestamps=false;

	protected $fillable =[
		'imagen',
		'texto'
	];

	protected $guarded =[

	];
}
