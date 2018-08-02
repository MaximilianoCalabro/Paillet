<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Cutaneas extends Model
{
	protected $table='cutaneas';

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
