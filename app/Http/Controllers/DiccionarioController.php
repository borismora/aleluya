<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Diccionario;

use DB;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class DiccionarioController extends Controller
{
    public function index(Request $request)
    {
    	$dic = DB::table('diccionario')->select('id as id','palabra as palabra')->orderBy('id','desc')->paginate(4);
        return [
                'pagination'=>[ 'total'=>$dic->total(),
                                'current_page'=>$dic->currentPage(),
                                'per_page'=>$dic->perPage(),
                                'last_page'=>$dic->lastPage(),
                                'from'=>$dic->firstItem(),
                                'to'=>$dic->lastPage()
                ],
                'dic'=>$dic
                ];
    }


    public function obtenerPalabras()
    {
        return DB::table('diccionario')->select('palabra as word')->get();
    }


    public function store(Request $request)
    {   

      try {

        DB::beginTransaction();
        $diccionario = new Diccionario;
        $diccionario->palabra= $request->get('palabra');
        $diccionario->save();
        DB::commit();
          
      } catch (Exception $e) {
          DB::rollback();
      }

      return;  

    }

    public function destroy($id)
    {
        Diccionario::destroy($id);
        return;
    }
}
