<?php

namespace App\Http\Controllers;

use App\proyectos;
use App\renders;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;

class PoryectoController extends Controller
{   



     public function getPhoneProyect($type){

        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    
        $host = $_SERVER['HTTP_HOST'];

    
        $requestUri = $_SERVER['REQUEST_URI'];


        $url = $scheme . $host . $requestUri;

        $parsed_url = parse_url($url, PHP_URL_PATH);

   
        $segments = explode('/', rtrim($parsed_url, '/'));

        $segments = end($segments);

        $proyetoactual = proyectos::where('rewrite','=',$segments)->first();


        if($type == 1){

            //return (isset($proyetoactual->celular_proyecto))?$proyetoactual->celular_proyecto:'983 479 617';
            return '983 479 617';

        }else{

            return (isset($proyetoactual->wsp_bit))?$proyetoactual->wsp_bit:'https://goo.su/DoWJoF';
            //return 'https://bit.ly/RoblesYyasikov';

        }
        

        


    }


    public function proyectos(){

        
        $id=1;
       
        
        $tipo=array('','inmobiliario','construccion y agregados','agencia digital y prensa','logistica y trasnsporte pesado','responsabilidad social');
       

        //SEOMeta::setTitle('Grupo Robles & Yasikov - '.$tipo[$id]);
        SEOMeta::setTitle('Grupo Robles & Yasikov - Nuestros proyectos inmobiliarios');

        SEOMeta::setDescription('Conoce los proyectos inmobiliarios ecoamigables de Robles & Yasikov en Oxapampa, Chanchamayo, Máncora y La Libertad y cómo puedes financiar tu lote soñado');
        SEOMeta::setCanonical('https://gruporobles.com.pe/proyectos');
        SEOMeta::addKeyword(['grupo robles', 'proyectos', 'grupo robles']);

        OpenGraph::setDescription('Conoce los proyectos inmobiliarios ecoamigables de Robles & Yasikov en Oxapampa, Chanchamayo, Máncora y La Libertad y cómo puedes financiar tu lote soñado.');
        OpenGraph::setTitle('Grupo Robles & Yasikov - Nuestros proyectos inmobiliarios');
        OpenGraph::setUrl('https://gruporobles.com.pe/proyectos');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        OpenGraph::addImage('https://gruporobles.com.pe/img/banner/banner3.jpg');
        OpenGraph::addImage('https://gruporobles.com.pe/img/banner/banner3.jpg');
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/img/banner/banner3.jpg', 'size' => 300]);
        OpenGraph::addImage('https://gruporobles.com.pe/img/banner/banner3.jpg', ['height' => 300, 'width' => 300]);

        JsonLdMulti::setTitle('Grupo Robles & Yasikov - Nuestros proyectos inmobiliarios');
        JsonLdMulti::setDescription('Conoce los proyectos inmobiliarios ecoamigables de Robles & Yasikov en Oxapampa, Chanchamayo, Máncora y La Libertad y cómo puedes financiar tu lote soñado.');
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/img/banner/banner3.jpg');
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Grupo Robles & Yasikov - Nuestros proyectos inmobiliarios');
            JsonLdMulti::setDescription('Conoce los proyectos inmobiliarios ecoamigables de Robles & Yasikov en Oxapampa, Chanchamayo, Máncora y La Libertad y cómo puedes financiar tu lote soñado.');
            JsonLdMulti::setType('Article');
            JsonLdMulti::addImage('https://gruporobles.com.pe/img/banner/banner3.jpg');
        }

            return view('proyectos');
    }
    public function detalle_proyecto($slug){

        $proyetoactual=proyectos::where('rewrite','=',$slug)->where('estado_proyecto','=',1)->first();
       
        if(!isset($proyetoactual)){

            return view('error');

        }
        SEOMeta::setTitle($proyetoactual->descripcion.' | Grupo Robles & Yasikov');
        SEOMeta::setDescription($proyetoactual->descripcion_banner);
        SEOMeta::addKeyword([$proyetoactual->descripcion,'Grupo Robles & Yasikov']);
        /*  SEOMeta::addMeta('article:published_time', $post->published_date->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $post->category, 'property'); */
        /*         SEOMeta::addKeyword(['key1', 'key2', 'key3']); */

        OpenGraph::setDescription($proyetoactual->descripcion_banner);
        OpenGraph::setTitle($proyetoactual->descripcion.' | Grupo Robles & Yasikov');
        OpenGraph::setUrl('https://gruporobles.com.pe/proyecto/'.$proyetoactual->rewrite);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'es_ES');
        OpenGraph::addProperty('locale:alternate', ['es_ES', 'en-us']);

        OpenGraph::addImage('https://gruporobles.com.pe/storage/'.$proyetoactual->img_banner);
        OpenGraph::addImage('https://gruporobles.com.pe/storage/'.$proyetoactual->img_banner);
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/storage/'.$proyetoactual->img_banner, 'size' => 300]);
        OpenGraph::addImage('https://gruporobles.com.pe/storage/'.$proyetoactual->img_banner, ['height' => 300, 'width' => 300]);

        JsonLd::setTitle($proyetoactual->descripcion.' | Grupo Robles & Yasikov');
        JsonLd::setDescription($proyetoactual->descripcion_banner);
        JsonLd::setType('Article');
        JsonLd::addImage('https://gruporobles.com.pe/storage/'.$proyetoactual->img_banner);

        // OR with multi

        JsonLdMulti::setTitle($proyetoactual->descripcion.' | Grupo Robles & Yasikov');
        JsonLdMulti::setDescription($proyetoactual->descripcion_banner);
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/storage/'.$proyetoactual->img_banner);
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Grupo Robles & Yasikov - '.$proyetoactual->descripcion);
            JsonLdMulti::setDescription($proyetoactual->descripcion_banner);
            JsonLdMulti::setType('Article');
            JsonLdMulti::addImage('https://gruporobles.com.pe/storage/'.$proyetoactual->img_banner);
        }

        // Namespace URI: http://ogp.me/ns/article#
        // article
            /*            OpenGraph::setTitle('Article')
            ->setDescription('Some Article')
            ->setType('article')
            ->setArticle([
                'published_time' => 'datetime',
                'modified_time' => 'datetime',
                'expiration_time' => 'datetime',
                'author' => 'profile / array',
                'section' => 'string',
                'tag' => 'string / array'
            ]); */


        // Namespace URI: http://ogp.me/ns/profile#
        // profile
        OpenGraph::setTitle($proyetoactual->descripcion)
            ->setDescription($proyetoactual->descripcion_banner)
            ->setType('profile')
            ->setProfile([
                'first_name' => $proyetoactual->descripcion,
                'last_name' => $proyetoactual->descripcion,
                'username' => $proyetoactual->descripcion,
                'gender' => 'enum(male, female)'
            ]);
        

          

            $id_proyecto = $proyetoactual->idproyecto;

           $renders = renders::where('idproyecto','=',$id_proyecto)->where('tipo','=',1)->get();
           $turismo = renders::where('idproyecto','=',$id_proyecto)->where('tipo','=',2)->get();


        return view('detalle_proyecto',compact('proyetoactual','renders','turismo'));
    }





   


}
