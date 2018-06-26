<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class CvLista extends Model
{
	protected $table='cv_lista';

	protected $primaryKey='id_cv_lista';

	public $timestamps=false;

	protected $fillable =[
		'texto'
	];

	protected $guarded =[

	];
}
