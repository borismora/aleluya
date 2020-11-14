<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = 'Tarjeta';

    protected $primarykey = 'id_cliente, num_tarjeta';

    public $timestamps = false;

    protected $fillable = [
    	'c_seguridad',
    	'mes',
    	'year',
    	'nombre',
    	'apellidos'
    ];
}
