<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'orden';

    protected $primarykey = 'num_pago, id_anuncio, id_cliente';

    public $timestamps = false;

    protected $fillable = [
    	'fecha', 'precio_uni', 'duracion', 'id_secretaria',
    	
    ];
}