<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;
use App\Models\Pregunta;
use App\Models\Registro;
use App\Models\RegistroAmp;
use App\Models\User;

class UtilsController extends Controller
{
    
    public function dashboard(){

        $secciones = Seccion::all();

        //dd(auth()->user()->registros);
        if(count(auth()->user()->registros > 0){
            
            return view('dashboard2', ['secciones' => $secciones, 'registros' => auth()->user()->registros]);
        }else{
            return view('dashboard', ['secciones' => $secciones]);
        }
     
    }

    public function secciones($sec){

       $seccion = Seccion::where('slug',$sec)->first();
       $secciones = Seccion::all();

       //dd($seccion->preguntas);

       
        

        
        return view('forms/'.$sec, ['preguntas' => $seccion->preguntas, 'seccion' => $seccion->seccion]);
        
        
        
    }

    public function paso1(Request $request){

        

        $new_registro = new Registro;

        $new_registro->id_user = auth()->id();
        $new_registro->nombreregistro = $request->reg[2];
        $new_registro->save();

        $seccion = Seccion::findOrFail(1)->get();
        $i = 1;


        foreach($request->reg as $r){
            $identificacion = new RegistroAmp;
            $identificacion->registro_id = $new_registro->id;
            $identificacion->pregunta_id = $i;
            $identificacion->respuesta = $r;
            $i = $i + 1;

            $identificacion->save();


        }

        
       return redirect()->route('ir.seccion', ['marco-normativo']);
        
                
        
    }
    



}
