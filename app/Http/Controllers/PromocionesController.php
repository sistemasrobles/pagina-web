<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Artesaos\SEOTools\Facades\JsonLdMulti;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\ZapierController;


use App\cliente;
use App\Ciudad;
use App\proyectos;
class PromocionesController extends Controller
{
  
 

   public function graciasLanding(){
        
        
        

        return view('gracias_landings');
    }




   public function formularioDetalle($slug){
        
        
         $proyetoactual=proyectos::where('rewrite','=',$slug)->first();

        return view('formulario-landing',compact('proyetoactual'));
    }




  public function formularioLotesOxapampa(){
        
         $projects = Proyectos::where('estado_proyecto','=',1)->where('region','=','Oxapampa')->get();

        
        return view('lf-lotes-en-oxapampa',compact('projects'));
        
        
    }
    
     public function formularioTerrenosOxapampa(){
        
        $projects = Proyectos::where('estado_proyecto','=',1)->where('region','=','Oxapampa')->get();

        
        return view('lf-terrenos-en-oxapampa',compact('projects'));
        
        
    }

    

    
  

    public function lotesOxapampa(){
        
        $projects = Proyectos::where('estado_proyecto','=',1)->where('region','=','Oxapampa')->get();

        
        return view('lotes_oxapampa',compact('projects'));
    }



    public function terrenosOxapampa(){
        
        $projects = Proyectos::where('estado_proyecto','=',1)->where('region','=','Oxapampa')->get();

        
        return view('terrenos_oxapampa',compact('projects'));
    }




     public function roblesTours(){
        
       

        $ciudadesx = Ciudad::all();

        $ciudades = array();


        foreach($ciudadesx as $list){

            $ciudades[] = array('id'=>$list->text,'text'=>$list->text);

        }

        

        return view('promociones_roblesTours',compact('ciudades'));
    }



    
       public function nuestrosProyectos(){
        
        

       

        $projects = Proyectos::where('estado_proyecto','=',1)->get();

        return view('landing_nuestros_proyectos',compact('projects'));
    }


        public function financiamiento(){


           $projects = Proyectos::where('estado_proyecto','=',1)->get();

        return view('landing_financiamiento_new',compact('projects'));


        }

    public function registrar(Request $request){
       

        
         $data = $request->only('nombre','apellido','movil','email','proyecto','tratamiento','terminos','horario');



            $rules = [
            
 
                        'nombre' => 'required',
                        'apellido' => 'required',
                        'movil' => 'required|string|min:9|max:20',
                        'email' => 'required|email',
                        'proyecto' => 'required',
                        'tratamiento' => 'accepted',
                        'terminos' => 'accepted',
                        
                        
                        
                       
                     
            
                    ];

                    $customMessages = [
                       
                        'nombre.required' => 'El nombre es obligatorio.',
                        'apellido.required' => 'El apellido es obligatorio.',
                        'movil.required' => 'El teléfono es obligatorio.',
                        'movil.min' => 'El teléfono debe tener al menos 9 dígitos.',
                        'movil.max' => 'El teléfono debe tener como maximo 20 dígitos.',
                        'email.required' => 'El email es obligatorio.',
                        'email.email' => 'El email es inválido.',
                        'proyecto.required' => 'El proyecto es obligatorio.',
                        'tratamiento.accepted' => 'Acepte el tratamiento de datos.',
                        'terminos.accepted' => 'Acepte los términos y condiciones.',
                       
                        
                       
                    ];


                    $validator = Validator::make($data,$rules,$customMessages);
                    

                    if ($validator->fails()) {


                        $errors = $validator->messages()->all();

                        $rpta = array('status'=>'error','description'=>'Completar los inputs solicitados','data'=>$errors);

                        return response()->json($rpta);     
                        
                    }else{


                        $zapier = new ZapierController;


                       

                        if($request->mensaje!='robles-tour'){

                            $nameProyect = Proyectos::where('idproyecto',$request->proyecto)->first();

                            $nameProyect_lbl = $nameProyect->descripcion;
                            
                        }else{

                            $nameProyect_lbl = $request->proyecto;
                        }

                        $data = array(

                            'name'=> $request->nombre,
                            'surename'=> $request->apellido,
                            'email'=> $request->email,
                            'phone'=> $request->movil,
                            'project'=>$nameProyect_lbl,
                            'message'=> $request->mensaje,
                            'timecall'=> $request->horario,
                            'form'=> 'formulario-landing',


                        );



                        $middleRpta = $zapier->save_zapier_data($data);

                        if($middleRpta == 200){


                           


                            $rpta = array('status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>[]);
                        
                            return response()->json($rpta);



                        }else{


                             $rpta = array('status'=>'error','description'=>'No se pudo sincronizar via zapier','data'=>[]);
                        
                            return response()->json($rpta);

                        }

                       
                            
                    }

    }



     public function registrarLandingFormulario(Request $request){
       

        
         $data = $request->only('nombre','apellido','movil','email','proyecto','tratamiento','terminos','horario');



            $rules = [
            
 
                        'nombre' => 'required',
                        'apellido' => 'required',
                        'movil' => 'required|string|min:9|max:20',
                        'email' => 'required|email',
                        'proyecto' => 'required',
                        'tratamiento' => 'accepted',
                        'terminos' => 'accepted',
                        
                        
                        
                       
                     
            
                    ];

                    $customMessages = [
                       
                        'nombre.required' => 'El nombre es obligatorio.',
                        'apellido.required' => 'El apellido es obligatorio.',
                        'movil.required' => 'El teléfono es obligatorio.',
                        'movil.min' => 'El teléfono debe tener al menos 9 dígitos.',
                        'movil.max' => 'El teléfono debe tener como maximo 20 dígitos.',
                        'email.required' => 'El email es obligatorio.',
                        'email.email' => 'El email es inválido.',
                        'proyecto.required' => 'El proyecto es obligatorio.',
                        'tratamiento.accepted' => 'Acepte el tratamiento de datos.',
                        'terminos.accepted' => 'Acepte los términos y condiciones.',
                       
                        
                       
                    ];


                    $validator = Validator::make($data,$rules,$customMessages);
                    

                    if ($validator->fails()) {


                        $errors = $validator->messages()->all();

                        $rpta = array('status'=>'error','description'=>'Completar los inputs solicitados','data'=>$errors);

                        return response()->json($rpta);     
                        
                    }else{


                        $zapier = new ZapierController;


                        $nameProyect = Proyectos::where('idproyecto',$request->proyecto)->first();


                        $data = array(

                            'name'=> $request->nombre,
                            'surename'=> $request->apellido,
                            'email'=> $request->email,
                            'phone'=> $request->movil,
                            'project'=>$nameProyect->descripcion,
                            'message'=> $request->mensaje,
                            'timecall'=> $request->horario,
                            'form'=> 'solo-formulario',
                            'slug'=>$nameProyect->rewrite


                        );



                        $middleRpta = $zapier->registrarLandingFormulario($data);

                        if($middleRpta == 200){


                           


                            $rpta = array('status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>[]);
                        
                            return response()->json($rpta);



                        }else{


                             $rpta = array('status'=>'error','description'=>'No se pudo sincronizar via zapier','data'=>[]);
                        
                            return response()->json($rpta);

                        }

                       
                            
                    }

    }
}
