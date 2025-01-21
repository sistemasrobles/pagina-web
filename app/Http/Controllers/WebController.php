<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewecoplazaRequest;

use App\proyectos;
use App\slider;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;
class WebController extends Controller
{





    public function nosotros(){
        SEOMeta::setTitle('Grupo Robles & Yasikov - Nosotros');
        SEOMeta::setDescription('Somos Robles & Yasikov, grupo inmobiliario con más de 7 años de experiencia desarrollando proyectos inmobiliarios ecoamigables de alta calidad en Perú.');
        SEOMeta::setCanonical('https://gruporobles.com.pe/nosotros');
        SEOMeta::addKeyword(['Grupo Robles & Yasikov', 'desarrolladora de proyectos']);

        OpenGraph::setDescription('Somos Robles & Yasikov, grupo inmobiliario con más de 7 años de experiencia desarrollando proyectos inmobiliarios ecoamigables de alta calidad en Perú.');
        OpenGraph::setTitle('Grupo Robles & Yasikov - Nosotros');
        OpenGraph::setUrl('https://gruporobles.com.pe/nosotros');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/ecoplazaclub.png', 'size' => 300]);
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png', ['height' => 300, 'width' => 300]);

        JsonLdMulti::setTitle('Grupo Robles & Yasikov - Nosotros');
        JsonLdMulti::setDescription('Somos Robles & Yasikov, grupo inmobiliario con más de 7 años de experiencia desarrollando proyectos inmobiliarios ecoamigables de alta calidad en Perú.');
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Grupo Robles & Yasikov - Nosotros');
            JsonLdMulti::setDescription('Somos Robles & Yasikov, grupo inmobiliario con más de 7 años de experiencia desarrollando proyectos inmobiliarios ecoamigables de alta calidad en Perú.');
            JsonLdMulti::setType('Article');
            JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        }

           $proyectos = proyectos::where('estado_proyecto','=','1')->get();

        return view('nosotros',compact('proyectos'));
    }



    public function contactanos(){



        SEOMeta::setTitle('Grupo Robles & Yasikov');
        SEOMeta::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
        SEOMeta::setCanonical('https://gruporobles.com.pe/contactanos');
        SEOMeta::addKeyword(['Grupo Robles & Yasikov', 'desarrolladora de proyectos']);

        OpenGraph::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
        OpenGraph::setTitle('Grupo Robles & Yasikov');
        OpenGraph::setUrl('https://gruporobles.com.pe/contactanos');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/ecoplazaclub.png', 'size' => 300]);
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png', ['height' => 300, 'width' => 300]);

        JsonLdMulti::setTitle('Grupo Robles & Yasikov');
        JsonLdMulti::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Grupo Robles & Yasikov');
            JsonLdMulti::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
            JsonLdMulti::setType('Article');
            JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        }
         $proyectos = proyectos::where('estado_proyecto','=','1')->get();
        return view('contactanos',compact('proyectos'));


    }

   

    public function terminos(){
        return view('terminos');
    }

    public function politicas(){
        return view('politicas');
    }


    public function referidos(){
        return view('referidos');
    }


     public function reclamaciones(){

        $projects = proyectos::where('estado_proyecto','=','1')->get();
        
        return view('reclamaciones' ,compact('projects'));
    }


     public function error(){
        return view('error');
    }


      public function download($file){
       

         $public_path = public_path();

            $url = $public_path.'/storage/'.$file;

            if (file_exists($url))
            {
              return response()->download($url);
            }

    }


}
