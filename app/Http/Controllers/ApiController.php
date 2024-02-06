<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionSperant;
use App\Http\Controllers\SperantController;

class ApiController extends Controller
{   


    

 

     public function saveLead(Request $request){

        $sperant = new SperantController;

        $response = $sperant->saveLead_key($request);

        return $response;
       
       
    }
}
