<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function Fformulario(){
        return view('formulario');
    }
 
    function Fconsulta(){
        return view('consulta');
    }



    public function Fconsultaform(validadorForm1 $req){
        //return $req->all();
        return redirect('/consulta')->with('confirmacion', 'Tu recuerdo llego al controlador');
    }

    /*
    public function procesarRecuerdos(Request $req){
        if(request()->filled('txtTitulo')){
            return 'Se lleno el titulo:'.request()->input('txtTitulo');
        }
            return 'No se lleno el titulo';
    }
    */
}