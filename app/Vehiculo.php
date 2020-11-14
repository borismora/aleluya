<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';

    protected $primarykey = 'patente';

    public $timestamps = false;

    protected $fillable = [
    	'categoria','capacidad',
    	
    ];
}
