<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';

    protected $primarykey = 'rut';

    public $timestamps = false;

    protected $fillable = [
    	'nombre','apellido','profesion','años_experiencia','curriculum',
    	
    ];
}
