<?php

namespace paillet;

use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
	protected $table='inicio';

	protected $primaryKey='id_inicio';

	public $timestamps=false;

	protected $fillable =[
		'imagen'		
	];

	protected $guarded =[

	];
}
