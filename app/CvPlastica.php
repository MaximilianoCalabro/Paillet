<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class CvPlastica extends Model
{
	protected $table='cv_plastica';

	protected $primaryKey='id_cv_plastica';

	public $timestamps=false;

	protected $fillable =[
		'texto'
	];

	protected $guarded =[

	];
}
