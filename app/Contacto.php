<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';

    protected $primarykey = 'id, medio';

    public $timestamps = false;

    protected $fillable = [
    	'contacto'
    	
    ];
}
