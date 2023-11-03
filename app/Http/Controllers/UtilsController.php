<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;
use App\Models\Pregunta;

class UtilsController extends Controller
{
    
    public function dashboard(){

        $secciones = Seccion::all();
        

        return view('dashboard', ['secciones' => $secciones]);
    }

    public function secciones($sec){

       $seccion = Seccion::where('slug',$sec)->first();
       $secciones = Seccion::all();

       //dd($seccion->preguntas);

       
        

        
        return view('forms/'.$sec, ['preguntas' => $seccion->preguntas]);
        
        
        
    }
    



}
