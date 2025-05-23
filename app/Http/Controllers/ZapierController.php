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
    
   

    public function save_zapier_data($data){

        date_default_timezone_set('America/Lima');

        $name        = $data["name"];
        $surename    = $data["surename"];
        $email       = $data["email"];
        $phone       = $data["phone"];
        $project     = $data["project"];
        $message     = $data["message"];
        $form        = $data["form"];
        $timecall    = $data["timecall"];
        $slug        = $data["slug"];
        $prospecting = $data["prospecting"];
        $tipo        = $data["tipo"];


         $url = 'https://hooks.zapier.com/hooks/catch/13923540/31avmb1/';

            

            if($form =='landing-nuestros-proyectos'){

                //hoja de google

                $url='https://hooks.zapier.com/hooks/catch/13923540/39coq0k/';
            }



            if($form =='landing-visitas-guiadas'){

                //hoja de google 11 de julio

                $url='https://hooks.zapier.com/hooks/catch/13923540/23juxdx/';
            }


            if($form =='landing-webinar'){

                //hoja de google 15 de julio

                $url='https://hooks.zapier.com/hooks/catch/13923540/226cnkc/';
            }

             if($form =='landing-webinar-color'){

                //hoja de google 25 de julio

                $url='https://hooks.zapier.com/hooks/catch/13923540/2u4tn7p/';
            }


             if($form =='landing-fundo-robles'){

                //hoja de landing-fundo-robles

                $url='https://hooks.zapier.com/hooks/catch/13923540/26fi5ip/';
            }
        



             if($form =='landing-robles-night'){

                //hoja de landing-robles-nigth

                $url='https://hooks.zapier.com/hooks/catch/13923540/2tqlaac/';
            }

           




            if($prospecting == 1){

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
            'date'=>date('d-m-Y H:i:s'),
            'type'=>$tipo,
            
        
        ];

        

        $response = Http::post($url, $data);

    
        $statusCode = $response->status();
        

        $body = $response->body();

        return $statusCode;



    }




     


     
}
