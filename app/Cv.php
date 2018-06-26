<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
	protected $table='cv';

	protected $primaryKey='id_cv';

	public $timestamps=false;

	protected $fillable =[
		'imagen',
		'texto'
	];

	protected $guarded =[

	];
}
