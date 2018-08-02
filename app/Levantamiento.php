<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Levantamiento extends Model
{
	protected $table='levantamiento';

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
