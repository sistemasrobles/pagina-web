<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Artesaos\SEOTools\Facades\JsonLdMulti;
use Illuminate\Support\Facades\Validator;


use App\cliente;
use App\Ciudad;
use App\proyectos;

use Illuminate\Support\Facades\Http;

class ZapierController extends Controller
{
    
    public function guardarFinancimiento(Request $request){


        $data = $request->only('nombre','apellido','movil','email','proyecto','tratamiento','terminos');



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


                     


                        $nameProyect = Proyectos::where('idproyecto',$request->proyecto)->first();


                        $data = array(

                            'name'=> $request->nombre,
                            'surename'=> $request->apellido,
                            'email'=> $request->email,
                            'phone'=> $request->movil,
                            'project'=>$nameProyect->descripcion,
                            'message'=> 'financiamiento banco alfin',
                            'form'=> 'form-financiamiento',


                        );



                        $middleRpta = $this->save_zapier_data_financiamiento($data);

                        if($middleRpta == 200){


                            $rpta = array('status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>[]);
                        
                            return response()->json($rpta);



                        }else{


                             $rpta = array('status'=>'error','description'=>'No se pudo sincronizar via zapier','data'=>[]);
                        
                            return response()->json($rpta);

                        }

                       
                            
                    }

    }



   public function guardarNosotros(Request $request){
       

        
         $data = $request->only('nombre','apellido','movil','email','proyecto','tratamiento','terminos');



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


                     


                        $nameProyect = Proyectos::where('idproyecto',$request->proyecto)->first();


                        $data = array(

                            'name'=> $request->nombre,
                            'surename'=> $request->apellido,
                            'email'=> $request->email,
                            'phone'=> $request->movil,
                            'project'=>$nameProyect->descripcion,
                            'message'=> '',
                            'form'=> 'form-google',


                        );



                        $middleRpta = $this->save_zapier_data_proyectos($data);

                        if($middleRpta == 200){


                            $rpta = array('status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>[]);
                        
                            return response()->json($rpta);



                        }else{


                             $rpta = array('status'=>'error','description'=>'No se pudo sincronizar via zapier','data'=>[]);
                        
                            return response()->json($rpta);

                        }

                       
                            
                    }

    }

    

    public function save_zapier_data_financiamiento($data){


       

         date_default_timezone_set('America/Lima');

        $name = $data["name"];
        $surename = $data["surename"];
        $email = $data["email"];
        $phone = $data["phone"];
        $project = $data["project"];
        $message = $data["message"];
        $form = $data["form"];



       

        
          $url = 'https://hooks.zapier.com/hooks/catch/13923540/31avmb1/';
        

         $data = [
            'name' => $name,
            'surename' => $surename,
            'email' => $email,
            'phone' => $phone,
            'project' => $project,
            'message' => $message,
            'form'=>$form,
            'date'=>date('d-m-Y H:i:s')
            
        
        ];

        

        $response = Http::post($url, $data);

    
        $statusCode = $response->status();
        

        $body = $response->body();

        return $statusCode;

    }


    public function save_zapier_data_proyectos($data){


       

         date_default_timezone_set('America/Lima');

        $name = $data["name"];
        $surename = $data["surename"];
        $email = $data["email"];
        $phone = $data["phone"];
        $project = $data["project"];
        $message = $data["message"];
        $form = $data["form"];



       

        
         $url='https://hooks.zapier.com/hooks/catch/13923540/39coq0k/';


         $data = [
            'name' => $name,
            'surename' => $surename,
            'email' => $email,
            'phone' => $phone,
            'project' => $project,
            'message' => $message,
            'form'=>$form,
            'date'=>date('d-m-Y H:i:s')
            
        
        ];

        

        $response = Http::post($url, $data);

    
        $statusCode = $response->status();
        

        $body = $response->body();

        return $statusCode;

    }



    public function save_zapier_data($data){

        date_default_timezone_set('America/Lima');

        $name = $data["name"];
        $surename = $data["surename"];
        $email = $data["email"];
        $phone = $data["phone"];
        $project = $data["project"];
        $message = $data["message"];
        $form = $data["form"];

        $timecall = $data["timecall"];



         $url = 'https://hooks.zapier.com/hooks/catch/13923540/31avmb1/';

        



         $data = [
            'name' => $name,
            'surename' => $surename,
            'email' => $email,
            'phone' => $phone,
            'project' => $project,
            'message' => $message,
            'form'=>$form,
            'timecall'=>$timecall,
            'date'=>date('d-m-Y H:i:s')
            
        
        ];

        

        $response = Http::post($url, $data);

    
        $statusCode = $response->status();
        

        $body = $response->body();

        return $statusCode;



    }




     public function registrarLandingFormulario($data){

        date_default_timezone_set('America/Lima');

        $name = $data["name"];
        $surename = $data["surename"];
        $email = $data["email"];
        $phone = $data["phone"];
        $project = $data["project"];
        $message = $data["message"];
        $form = $data["form"];

        $slug = $data["slug"];


        $timecall = $data["timecall"];



            if($slug=='valle-orquidea'){    

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fs5k12/';

            }elseif($slug=='la-retama'){

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fs9v1e/';

            }elseif($slug=='el-golf-de-poseidon'){

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fsr3bw/';

            }elseif($slug=='el-arco-dorado'){

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fsrz4q/';

            }elseif($slug=='el-bosque-del-rey'){

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fsrnwl/';

            }elseif($slug=='bella-primavera'){

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fsi80b/';

            }elseif($slug=='fundo-valentina'){

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fssufe/';

            }else{

                $url = 'https://hooks.zapier.com/hooks/catch/13923540/3fst555/';
            }

         

        



         $data = [
            'name' => $name,
            'surename' => $surename,
            'email' => $email,
            'phone' => $phone,
            'project' => $project,
            'message' => $message,
            'form'=>$form,
            'timecall'=>$timecall,
            'date'=>date('d-m-Y H:i:s')
            
        
        ];

        

        $response = Http::post($url, $data);

    
        $statusCode = $response->status();
        

        $body = $response->body();

        return $statusCode;



    }



     
}
