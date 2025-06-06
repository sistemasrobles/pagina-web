<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionSperant;


class SperantController extends Controller
{   


    protected function listEntities($entity,$desiredId)
    {   

        
        $apiEndpoint = '/'.config('sperant.version').'/'.$entity;
        $apiKey = config('sperant.apiKey');
        $url    = config('sperant.url').$apiEndpoint;



        $client = new Client();

        try {


            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => $apiKey,
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody(), true);

           
            $resultSet = collect($data['data'])->filter(function ($item) use ($desiredId) {

                return empty($desiredId) || $item['attributes']['id'] == $desiredId;

            })->map(function ($item) {

                return [
                    'id' => $item['attributes']['id'],
                    'text' => $item['attributes']['name'],
                ];

            })->toArray();



            return $resultSet;

        } catch (\GuzzleHttp\Exception\RequestException $e) {
           
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()]);

        } catch (\Exception $e) {
         

            return response()->json(['error' => $e->getMessage()]);
        }
    }


 

    public function sendNotification($e,$postData){

        $support = config('sperant.support_mail_1');
        //$support2 = config('sperant.support_mail_2');
        $support2 = 'sistemasrobles23@gmail.com';


        Mail::to($support)->cc($support2)->send(new NotificacionSperant($e,$postData));

    }



   



     public function saveLead($request,$source){


       
        

    
        try {
            

            $entity ='clients';
            $entity = '/'.config('sperant.version').'/'.$entity;
            $apiKey = config('sperant.apiKey');
            $url    = config('sperant.url').$entity;

        
           if ($source =='pagina-web'){

                $channel_id = 3;

                 //si es robles tours setear 18

                $idCap = 8;

                if($request->formulario == 'robles-tour'){

                    $idCap = 18;

                }

                 if($request->formulario == 'landing-fundo-robles'){

                    $idCap = 20;

                }

                 if($request->formulario == 'landing-webinar'){

                    //evento de lucy

                    $idCap = 25;

                }


                if($request->formulario == 'landing-visitas-guiadas'){

                    //evento guiado de lucy

                    $idCap = 26;

                }


                 if($request->formulario == 'landing-webinar-2'){

                    //webinar de diana

                    $idCap = 23;

                }
                

                  if($request->formulario == 'landing-visitas-guiadas-2'){

                    //evento guiado de diana

                    $idCap = 24;

                }



                if($request->formulario == 'landing-robles-night-2'){

                    //rnoche de diana

                    $idCap = 30;

                }


                if($request->formulario == 'landing-tematica'){

                    //campana tematica diana

                    $idCap = 31;

                }

                //landings marco

                

                 if($request->formulario == 'landing-los-pinos-a'){

                   
                    $channel_id = 8;
                    $idCap = 8;

                }

                 if($request->formulario == 'landing-los-pinos-b'){

                   
                    $channel_id = 8;
                    $idCap = 8;

                }

                 if($request->formulario == 'landing-la-retama-a'){

                   
                    $channel_id = 8;
                    $idCap = 8;

                }

                 if($request->formulario == 'landing-la-retama-b'){

                    
                    $channel_id = 8;
                    $idCap = 8;

                }


                if($request->formulario == 'landing-dinamica'){

                    
                    $channel_id = 8;
                    $idCap = 8;

                }


            }elseif ($source =='tik-tok'){

                 $channel_id = 9;

                 $idCap= 19;
            }
            


            $inputChannels = $this->listEntities('input_channels',$channel_id); //pagina web o tiktok
            $captationWays = $this->listEntities('captation_ways',$idCap); //pagina web o tiktok
            $interestTypes = $this->listEntities('interest_types',21); //por contactar para todos los casos ,importado lead

        
       
          

            $client = new Client();


            $horario_llamada = (!empty($request->horario))?"; llamar a las : ".$request->horario:'';


            $observation = $request->mensaje." ".$horario_llamada;


            $email = $request->email;
            
            $email_sin_espacios = str_replace(' ', '', $email);


            $postData = [
                'fname' => $request->nombre,
                'lname' => $request->apellido,
                'email' => $email_sin_espacios,
                'phone' => $request->movil,
                'utm_source' => $request->utm_source,
                'utm_medium' => $request->utm_medium,
                'utm_campaign' => $request->utm_campaign,
                'utm_term' => $request->utm_term,
                'utm_content' => $request->utm_content,
                'input_channel_id' => reset($inputChannels)["id"],
                'source_id' => reset($captationWays)["id"],
                'interest_type_id' => reset($interestTypes)["id"],
                'project_id' => $request->proyecto,
                'observation'=> $observation,
               
                    
            ];

            
          

            $response = $client->request('POST', $url, [
                'headers' => [
                    'Authorization' => $apiKey,
                    'Accept' => 'application/json',
                ],
                'json' => $postData, 
            ]);

           
            $responseData = json_decode($response->getBody(), true);

           
           
            return response()->json(['status'=>'ok','description'=>'Datos guardados satisfactoriamente','data'=>$responseData]);

            

        }catch (\GuzzleHttp\Exception\RequestException $e) {
            
            $this->sendNotification($e,$postData);

            return response()->json(['status' =>'error','description'=>$e->getMessage(),'data'=>[]]);

        }  catch (\Exception $e) {


            $this->sendNotification($e,$postData);

            return response()->json(['status' =>'error','description'=>$e->getMessage(),'data'=>[]]);
        }               

       
    }


    
}
