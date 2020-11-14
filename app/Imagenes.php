<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    protected $table = 'fotos';

    protected $primarykey = 'id_foto, id_anuncio';

    public $timestamps = false;

    protected $fillable = [
    	'foto',
    	
    ];
}
