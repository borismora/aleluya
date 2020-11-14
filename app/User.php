<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array


     */


    protected $table='users'; // asignamos la tabla a la cual hara referencia.

    protected $primaryKey='id'; //asignamos la PK de nuestra tabla.

    protected $fillable = [
        'rut','nombre','apellido', 'email','password','tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
