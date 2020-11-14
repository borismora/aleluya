<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segundo extends Model
{
    protected $table = 'segundo';

    protected $primarykey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'titulo', 'descripcion'
    	
    ];
}
