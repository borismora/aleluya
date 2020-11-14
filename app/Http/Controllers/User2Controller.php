<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//agregamos nuestro modelo
use App\User;
use App\Cliente;
use App\Contacto;

use Illuminate\Support\Facades\Redirect;
use DB;

class User2Controller extends Controller
{
    public function create()
    {
     // return view('usuarios_cliente.create');  
    }

    public function store(Request $request)
    {   

      $tipo = $request->get('tipo'); //captura el tipo de servicio

      try {

        DB::beginTransaction();
      
        $usuario = new User;
        $usuario->rut=$request->get('rut');
        $usuario->nombre=$request->get('nombre');
        $usuario->apellido=$request->get('apellido');
        $usuario->estado='activo';
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->tipo = 'cliente';
        $usuario->save(); 

    
        $cliente = new Cliente;
        $cliente->id_cliente = $usuario->id;
        $cliente->save(); 
        

        //Se agrega la informacion de contacto del usuario
        if($request->get('telefono') != '' || $request->get('telefono') != null){
          $contacto = new Contacto;
          $contacto->id = $usuario->id;
          $contacto->medio = 'telefono';
          $contacto->contacto = $request->get('telefono'); 
          $contacto->save(); 
        }
        if($request->get('facebook') != '' || $request->get('facebook') != null){
          $contacto = new Contacto;
          $contacto->id = $usuario->id;
          $contacto->medio = 'facebook';
          $contacto->contacto = $request->get('facebook'); 
          $contacto->save(); 
        }

        DB::commit();
          
      } catch (Exception $e) {
          DB::rollback();
      }

      return;  

    }
}
