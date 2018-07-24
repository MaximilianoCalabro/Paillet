<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Cirugia extends Model
{
	protected $table='cirugia';

	protected $primaryKey='id_cirugia';

	public $timestamps=false;

	protected $fillable =[
		'texto',
		'titulo',
	];

	protected $guarded =[

	];
}
