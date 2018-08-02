<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Subseccion extends Model
{
	protected $table='subseccion';

	protected $primaryKey='id_subseccion';

	public $timestamps=false;

	protected $fillable =[
		'subseccion',
		'id'
	];

	protected $guarded =[

	];
}
