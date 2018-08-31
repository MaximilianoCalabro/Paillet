<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{    
	protected $table='slider';

	protected $primaryKey='id_slider';

	public $timestamps=false;

	protected $fillable =[
		'slider',
		'nombre'
	];

	protected $guarded =[

	];
}
