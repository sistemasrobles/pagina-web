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
use App\Http\Controllers\SperantController;


use App\Mail\EmailReclamaciones;
use App\Mail\ClienteReclamo;


use DB;
use App\cliente;
use App\Ciudad;
use App\proyectos;
class PromocionesController extends Controller
{
  
    
    public function visitasGuiadas(){

        $projects = Proyectos::where('estado_proyecto','=',1)->get();


        return view('visitas_guiadas',compact('projects'));
    }


      public function visitasGuiadas2(){

        $projects = Proyectos::where('estado_proyecto','=',1)->get();


        return view('visitas_guiadas_2',compact('projects'));
    }

    

    public function tematica(){

        $projects = Proyectos::where('estado_proyecto','=',1)->get();


        return view('tematica',compact('projects'));
    }



    public function roblesNight(){

        $projects = Proyectos::where('estado_proyecto','=',1)->get();


        return view('robles-night',compact('projects'));
    }


       public function roblesNight2(){

        $projects = Proyectos::where('estado_proyecto','=',1)->get();


        return view('robles-night-2',compact('projects'));
    }




     public function saveVisitas(Request $request){
       

        
         $data = $request->only('nombre','apellido','movil','email','proyecto','mensaje','horario','formulario','utm_source','utm_medium','utm_campaign','utm_term','utm_content','tipo');



            $rules = [
            
 
                        'nombre' => 'required',
                        'apellido' => 'required',
                        'movil' => 'required|string|min:9|max:20',
                        'email' => 'required|email',
                        'proyecto' => 'required',                
                        'mensaje' => 'nullable',
                        'horario' => 'nullable',
                        'formulario' => 'required',

                        'utm_source' => 'nullable',
                        'utm_medium' => 'nullable',
                        'utm_campaign' => 'nullable',
                        'utm_term' => 'nullable',
                        'utm_content' => 'nullable',
                        
                        
                       
                     
            
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
                       
                        'tipo.required' => 'El tipo de cliente es obligatorio',
                        
                       
                    ];


                    $validator = Validator::make($data,$rules,$customMessages);
                    
                    $validator->sometimes('tipo', 'required', function ($input) {

                            return $input->formulario === 'landing-webinar';
                    });


                    if ($validator->fails()) {


                        $errors = $validator->messages()->all();

                        $rpta = array('status'=>'warning','description'=>'Completar los inputs solicitados','data'=>$errors);

                        return response()->json($rpta); 



                        
                    }else{

                        $middleRpta =  $this->savePromotion($request);



                         return $middleRpta;
                        

                       
                            
                    }

    }



    public function webinar(){


    return view('webinar');


  }

   public function webinar2(){


    return view('webinar2');


  }


    public function color(){


    return view('landing_color');


  }


   public function webinarInversor(){


    return view('landing_color_2');


  }



  public function successReclamaciones(){


    return view('success_reclamo');


  }

   public function graciasLanding(){
        
        
        

        return view('gracias_landings');
    }


    

    public function landingFundoLosRobles(){
        
        
        

        return view('landing_fundo_los_robles');
    }




     public function laRetamaA(){
        
        
         $proyetoactual=proyectos::where('idproyecto','=',3)->first();



        
        return view('laretamaa',compact('proyetoactual'));
    }


  public function laRetamaB(){
        
        
         $proyetoactual=proyectos::where('idproyecto','=',3)->first();



        
        return view('laretamab',compact('proyetoactual'));
    }




    public function lospinosA(){
        
        
         $proyetoactual=proyectos::where('idproyecto','=',10)->first();



        
        return view('lospinosa',compact('proyetoactual'));
    }


  public function lospinosB(){
        
        
         $proyetoactual=proyectos::where('idproyecto','=',10)->first();



        
        return view('lospinosb',compact('proyetoactual'));
    }
    

    public function formularioMkt($slug){
        
        
         $proyetoactual=proyectos::where('rewrite','=',$slug)->where('estado_proyecto','=',1)->first();


          if(!isset($proyetoactual)){

            return view('error');

        }

        
        return view('formulario-mkt',compact('proyetoactual'));
    }

   public function formularioDetalle($slug){
        
        
         $proyetoactual=proyectos::where('rewrite','=',$slug)->where('estado_proyecto','=',1)->first();


          if(!isset($proyetoactual)){

            return view('error');

        }

        
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
        
        //$projects = Proyectos::where('estado_proyecto','=',1)->where('region','=','Oxapampa')->get();

        

        $orderedIds = [8, 6, 7, 5, 4]; 


        $projects = Proyectos::where('estado_proyecto', '=', 1)
    ->where('region', '=', 'Oxapampa')
    ->whereIn('idproyecto', $orderedIds) 
    ->orderByRaw(DB::raw("FIELD(idproyecto, " . implode(',', $orderedIds) . ")"))
    ->get();

        return view('lotes_oxapampa',compact('projects'));
    }



    public function terrenosOxapampa(){
        
        //$projects = Proyectos::where('estado_proyecto','=',1)->where('region','=','Oxapampa')->get();

         $orderedIds = [8, 6, 7, 5, 4]; 


        $projects = Proyectos::where('estado_proyecto', '=', 1)
    ->where('region', '=', 'Oxapampa')
    ->whereIn('idproyecto', $orderedIds) 
    ->orderByRaw(DB::raw("FIELD(idproyecto, " . implode(',', $orderedIds) . ")"))
    ->get();

    
        return view('terrenos_oxapampa',compact('projects'));
    }




     public function roblesTours(){
        
     
        $projects = Proyectos::where('estado_proyecto','=',1)->get();

        return view('promociones_roblesTours',compact('projects'));
    }



    
       public function nuestrosProyectos(){
        
        

       

        $projects = Proyectos::where('estado_proyecto','=',1)->get();

        return view('landing_nuestros_proyectos',compact('projects'));
    }


        public function financiamiento(){


           $projects = Proyectos::where('estado_proyecto','=',1)->get();

        return view('landing_financiamiento_new',compact('projects'));


        }


    protected function savePromotion($request){


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
                            'form'=> $request->formulario,
                            'slug'=>$nameProyect->rewrite,
                            'prospecting'=>$request->prospecting,
                            'tipo'=>$request->tipo,

                        );




                        $middleRpta = $zapier->save_zapier_data($data);

                        if($middleRpta == 200){


                           $rtpa =  array('status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>[]);
                        
                        
                           return response()->json($rtpa);



                        }

                         $rtpa =  array('status'=>'error','description'=>'No se pudo sincronizar via zapier','data'=>[]);
                        
                         return response()->json($rtpa);



    }



    public function registrar(Request $request){
       

        
         $data = $request->only('nombre','apellido','movil','email','proyecto','mensaje','horario','formulario','utm_source','utm_medium','utm_campaign','utm_term','utm_content');



            $rules = [
            
 
                        'nombre' => 'required',
                        'apellido' => 'required',
                        //'movil' => 'required|string|min:9|max:20',


                        'movil' => [
                            'required',
                            'string',
                               'regex:/^9[0-9]{8}$/',

                        ],

                        'email' => 'required|email',
                          //'email' => ['required', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/'],
                          //'email' => ['required', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+\.[^\s@]+$/'],
                        'proyecto' => 'required',                
                        'mensaje' => 'nullable',
                        'horario' => 'nullable',
                        'formulario' => 'required',

                        'utm_source' => 'nullable',
                        'utm_medium' => 'nullable',
                        'utm_campaign' => 'nullable',
                        'utm_term' => 'nullable',
                        'utm_content' => 'nullable',
                        
                        
                       
                     
            
                    ];

                    $customMessages = [
                       
                        'nombre.required' => 'El nombre es obligatorio.',
                        'apellido.required' => 'El apellido es obligatorio.',
                        'movil.required' => 'El celular es obligatorio.',
                        //'movil.min' => 'El teléfono debe tener al menos 9 dígitos.',
                        //'movil.max' => 'El teléfono debe tener como maximo 20 dígitos.',
                        'movil.regex'=>'El celular no tiene un formato válido . ejm (999999999)',
                        'email.required' => 'El email es obligatorio.',
                        'email.email' => 'El email es inválido.',
                         //'email.regex' => 'El email es inválido.',
                        'proyecto.required' => 'El proyecto es obligatorio.',
                       
                       
                        
                       
                    ];


                    $validator = Validator::make($data,$rules,$customMessages);
                    

                    if ($validator->fails()) {


                        $errors = $validator->messages()->all();

                        $rpta = array('status'=>'warning','description'=>'Completar los inputs solicitados','data'=>$errors);

                        return response()->json($rpta); 



                        
                    }else{


                        $saveSperant = config('sperant.getIdProject');


                        if($saveSperant){

                            $sperant = new SperantController();

                            //formularios web u otros medios

                            $source = 'pagina-web';

                            $middleRpta = $sperant->saveLead($request,$source);


                        }else{


                           $middleRpta =  $this->savePromotion($request);


                        }




                         return $middleRpta;
                        

                       
                            
                    }

    }





    public function generar_codigo_reclamo(){

        $anio = date("Y");

        $max = DB::select("SELECT MAX(id) as maximo FROM reclamaciones ");


       
        $nextId = (int)$max[0]->maximo + 1;

      


        $codigoGenerado = $anio . '-' . sprintf('%05d', $nextId);

        return $codigoGenerado;


    }

    public function genera_pdf_reclamo($data,$codigo){


        date_default_timezone_set('America/Lima');

        $now = date("Y-m-d H:i:s");

        $pdf = \App::make('dompdf.wrapper');
        $pdf->setPaper('A4');
        $pdf->loadView('reports.libro_reclamaciones',compact('data','codigo','now'));


        return $pdf->output();


        


    }

    public function guardarReclamaciones(Request $request){
       

            try {
                
                $data = $request->only('ruc','razon','direccion','proyecto','tipo_documento','numero_documento','nombres','apepat','apemat','celular','fijo','email','departamento','provincia','distrito','direccion_cliente','apoderado','monto_reclamado','bien','gridRadios','queja','pedido');



                $rules = [
            
 
                        'ruc' => 'required',
                        'razon' => 'required',
                        'direccion' => 'required',
                        'proyecto' => 'required',


                        'tipo_documento' => 'required',
                        'numero_documento' => 'required|string|max:20',
                        'nombres' => 'required|string|max:250',
                        'apepat' => 'required|string|max:250',
                        'apemat' => 'required|string|max:250',

                        'celular' => 'required|string|max:100',
                        'fijo' => 'nullable',
                        'email' => 'required|string|max:250',

                        'departamento' => 'required|string|max:250',
                        'provincia' => 'required|string|max:250',
                        'distrito' => 'required|string|max:250',
                        'direccion_cliente' => 'required|string|max:250',

                        
                        'apoderado' => 'nullable',
                        'monto_reclamado' => 'required|numeric',
                        'bien' => 'required|string|max:2000',
                        'gridRadios' => 'required',
                        'queja' => 'required|string|max:2000',
                        'pedido' => 'required|string|max:2000',
                        
                        
                       
                     
            
                    ];

                  


                    $validator = Validator::make($data,$rules);
                    

                    if ($validator->fails()) {


                        $errors = $validator->messages()->all();

                        $rpta = array('status'=>'error','description'=>'Completar los inputs solicitados','data'=>$errors);

                        return response()->json($rpta);     
                        
                    }else{


                        date_default_timezone_set('America/Lima');

                        $now = date("Y-m-d H:i:s");


                        $codigo_generado = $this->generar_codigo_reclamo();

                       $status = DB::insert("INSERT INTO reclamaciones(ruc,codigo,razon_social,direccion,proyecto,tipo_documento,numero_documento,nombres,apepat,apemat,celular,fijo,email,departamento,provincia,distrito,direccion_cliente,bien_contratado,monto_reclamado,tipo_reclamo,queja,pedido,created_at,apoderado) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",[  $request->ruc,$codigo_generado,
                        $request->razon,
                        $request->direccion,
                        $request->proyecto,
                        $request->tipo_documento,
                        $request->numero_documento,
                        $request->nombres,
                        $request->apepat,
                        $request->apemat,
                        $request->celular,
                        $request->fijo,
                        $request->email,
                        $request->departamento,
                        $request->provincia,
                        $request->distrito,
                        $request->direccion_cliente,
                        $request->bien,
                        $request->monto_reclamado,
                        $request->gridRadios,
                        $request->queja,
                        $request->pedido,
                        $now,
                        $request->apoderado
                        ]);


                        $nameProyect =proyectos::where('idproyecto','=',$request->proyecto)->first();


                        if($status == 1){

                            $file_reclamo = $this->genera_pdf_reclamo($request,$codigo_generado);
                            

                             // \Mail::to(['tisistemas@gruporobles.com.pe'])->send(new EmailReclamaciones($request,$nameProyect->descripcion,$codigo_generado,$file_reclamo));


                             

                             


                             \Mail::to([$request->email,'tisistemas@gruporobles.com.pe'])->send(new ClienteReclamo($request,$nameProyect->descripcion,$codigo_generado,$file_reclamo));
                             


                             if (count(Mail::failures()) > 0) {

                               

                                 $rpta = array('status'=>'error','description'=>'Error al enviar','data'=>implode(', ', Mail::failures());
                        
                                    return response()->json($rpta);



                            } else {

                                 $rpta = array('status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>[]);
                        
                                    return response()->json($rpta);

                            }




                           



                        }else{


                             $rpta = array('status'=>'error','description'=>'No se pudo guardar los datos','data'=>[]);
                        
                            return response()->json($rpta);

                        }

                       
                            
                    }




            } catch (\Exception $e) {
                


                 $rpta = array('status'=>'error','description'=>$e->getMessage(),'data'=>[]);
                        
                return response()->json($rpta);

            }


         

    }


      public function addTiktok(Request $request){


       
    
        $correo     = $request->correo;
        $nombres    = $request->nombres;
        $apellidos  = $request->apellidos;
        $celular    = $request->celular;


        

        $sperant = new SperantController();

        $requestNew = new Request();

        $requestNew->merge([

            'nombre' => $nombres,
            'apellido'=> $apellidos,
            'email' => $correo,
            'movil' => $celular,
            'proyecto' =>16, //proyecto 16 - fundo los robles
            'mensaje' =>'Lead interesado en los proyectos de Robles & Yasikov',
            'formulario' =>'formulario-tiktok'
       
        ]);

        $middleRpta = $sperant->saveLead($requestNew,'tik-tok');


        return $middleRpta;
        

      }
}
