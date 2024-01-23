<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class SperantController extends Controller
{
    public function listProyects(Request $request){


       

        $endPoint = '/v3/projects';
      
        $apiKey =  config('sperant.apiKey');

        $url = config('sperant.url').$endPoint;

       
        $client = new Client();


        try {

            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => $apiKey,
                    'Accept' => 'application/json',
                  
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            $resultSet = [];

            foreach($data['data'] as $list){

                $resultSet [] = array(

                                    'id'=>$list["attributes"]['id'],
                                    'text'=>$list["attributes"]['name']
                                );
                
            }

            return $resultSet;


        } catch (\Exception $e) {
         
            return response()->json(['error' =>$e->getMessage()]);
        }
                          

       
    }
}
