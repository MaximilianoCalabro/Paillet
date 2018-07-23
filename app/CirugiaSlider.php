<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class CirugiaSlider extends Model
{
	protected $table='cirugia_slider';

	protected $primaryKey='id_cirugia_slider';

	public $timestamps=false;

	protected $fillable =[
		'imagen',
		'texto',
		'titulo'
	];

	protected $guarded =[

	];
}
