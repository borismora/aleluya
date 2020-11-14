<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diccionario extends Model
{
    protected $table = 'diccionario';

    protected $primarykey = 'id, palabra';

    public $timestamps = false;

}
