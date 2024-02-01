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


 

    public function sendNotification($e){

        $support = config('sperant.support_mail_1');

        Mail::to($support)->send(new NotificacionSperant($e));

    }

     public function saveLead($request){


       
        

    
        try {
            

            $entity ='clients';
            $entity = '/'.config('sperant.version').'/'.$entity;
            $apiKey = config('sperant.apiKey');
            $url    = config('sperant.url').$entity;

        
        
            $inputChannels = $this->listEntities('input_channels',19); //pagina web
            $captationWays = $this->listEntities('captation_ways',53); //pagina web - seo
            $interestTypes = $this->listEntities('interest_types',5); //por contactar

        
       

            $client = new Client();


            $observation = "llamar a las : ".$request->horario;



            $postData = [
                'fname' => $request->nombre,
                'lname' => $request->apellido,
                'email' => $request->email,
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
                'observation'=> $observation
               
                    
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
            
            $this->sendNotification($e);

            return response()->json(['status' =>'error','description'=>$e->getMessage(),'data'=>[]]);

        }  catch (\Exception $e) {


            $this->sendNotification($e);

            return response()->json(['status' =>'error','description'=>$e->getMessage(),'data'=>[]]);
        }               

       
    }
}
