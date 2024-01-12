<?php

namespace App\Http\Controllers;

use App\cliente;
use App\Mail\SendNotification;

use App\proyectos;
use Illuminate\Http\Request;
use App\Http\Controllers\ZapierController;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function store(Request $request){


        $data = $request->only('nombre','apellido','movil','email','proyecto','horario');



            $rules = [
            
 
                        'nombre' => 'required',
                        'apellido' => 'required',
                        'movil' => 'required|string|min:9|max:20',
                        'email' => 'required|email',
                        'proyecto' => 'required',
                       
                        
                        
                        
                       
                     
            
                    ];

                    $customMessages = [
                       
                        'nombre.required' => 'El nombre es obligatorio.',
                        'apellido.required' => 'El apellido es obligatorio.',
                        'movil.required' => 'El teléfono es obligatorio.',
                        'movil.min' => 'El teléfono debe tener al menos 9 dígitos.',
                        'movil.max' => 'El teléfono debe tener como maximo 20 dígitos.',
                        'email.required' => 'El email es obligatorio.',
                        'email.email' => 'El email es inválido.',
                        'proyecto.required' => 'El proyecto es obligatorio.'
                      
                       
                        
                       
                    ];


                    $validator = Validator::make($data,$rules,$customMessages);
                    

                    if ($validator->fails()) {


                        $errors = $validator->messages()->all();

                        $rpta = array('status'=>'error','description'=>'Completar los inputs solicitados','data'=>$errors);

                        return response()->json($rpta);     
                        
                    }



      	
                        $zapier = new ZapierController;


                        $nameProyect = Proyectos::where('idproyecto',$request->proyecto)->first();



                       
                        $data = array(

                            'name'=> $request->nombre,
                            'surename'=> $request->apellido,
                            'email'=> $request->email,
                            'phone'=> $request->movil,
                            'project'=>$nameProyect->descripcion,
                            'message'=> $request->mensaje,
                            'form'=> $request->formulario,
                            'timecall'=> $request->horario,


                        );


                            $middleRpta = $zapier->save_zapier_data($data);


                            


                            //\Mail::to(['bzambrano@gruporobles.com.pe'])->send(new SendNotification($request,$nameProyect->descripcion));


                            //return    redirect('/proyecto/'.$proyecto->rewrite.'/gracias#plaza_form')->with('message', '1');

                            if($middleRpta == 200){


                           


                                $rpta = array('status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>[]);
                        
                                return response()->json($rpta);



                            }else{


                                $rpta = array('status'=>'error','description'=>'No se pudo sincronizar via zapier','data'=>[]);
                        
                                return response()->json($rpta);

                            }
           

                           

                            

                        
                          

       
    }
}
