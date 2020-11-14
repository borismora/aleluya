<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table = 'secretaria';

    protected $primarykey = 'id_secretaria';

    public $timestamps = false;

    protected $fillable = [
    	'anuncios_pend',
    	
    ];
}
