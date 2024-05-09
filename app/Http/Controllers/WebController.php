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
        SEOMeta::setTitle('Grupo Robles & Yasikov Nosotros');
        SEOMeta::setDescription('Somos un grupo inmobiliario con 7 años de experiencia, desarrollando proyectos inmobiliarios a nivel nacional, contando con proyectos en la Costa, Sierra y Selva del Perú. Hoy buscamos brindar los mejores beneficios y la seguridad a nuestros clientes al adquirir su lote con el fin de crecer con ellos. Además de brindarles un excelente condominio eco amigable que armonice con la naturaleza.');
        SEOMeta::setCanonical('https://gruporobles.com.pe/nosotros');
        SEOMeta::addKeyword(['Grupo Robles & Yasikov', 'desarrolladora de proyectos']);

        OpenGraph::setDescription('Somos un grupo inmobiliario con 7 años de experiencia, desarrollando proyectos inmobiliarios a nivel nacional, contando con proyectos en la Costa, Sierra y Selva del Perú. Hoy buscamos brindar los mejores beneficios y la seguridad a nuestros clientes al adquirir su lote con el fin de crecer con ellos. Además de brindarles un excelente condominio eco amigable que armonice con la naturaleza.');
        OpenGraph::setTitle('Grupo Robles & Yasikov Nosotros');
        OpenGraph::setUrl('https://gruporobles.com.pe/nosotros');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/ecoplazaclub.png', 'size' => 300]);
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png', ['height' => 300, 'width' => 300]);

        JsonLdMulti::setTitle('Grupo Robles & Yasikov Nosotros');
        JsonLdMulti::setDescription('Somos un grupo inmobiliario con 7 años de experiencia, desarrollando proyectos inmobiliarios a nivel nacional, contando con proyectos en la Costa, Sierra y Selva del Perú. Hoy buscamos brindar los mejores beneficios y la seguridad a nuestros clientes al adquirir su lote con el fin de crecer con ellos. Además de brindarles un excelente condominio eco amigable que armonice con la naturaleza.');
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Grupo Robles & Yasikov Nosotros');
            JsonLdMulti::setDescription('Somos un grupo inmobiliario con 7 años de experiencia, desarrollando proyectos inmobiliarios a nivel nacional, contando con proyectos en la Costa, Sierra y Selva del Perú. Hoy buscamos brindar los mejores beneficios y la seguridad a nuestros clientes al adquirir su lote con el fin de crecer con ellos. Además de brindarles un excelente condominio eco amigable que armonice con la naturaleza.');
            JsonLdMulti::setType('Article');
            JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        }

           $proyectos = proyectos::where('estado_proyecto','=','1')->get();

        return view('nosotros',compact('proyectos'));
    }



    public function contactanos(){



        SEOMeta::setTitle('Grupo Robles & Yasikov');
        SEOMeta::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios.');
        SEOMeta::setCanonical('https://gruporobles.com.pe/contactanos');
        SEOMeta::addKeyword(['Grupo Robles & Yasikov', 'desarrolladora de proyectos']);

        OpenGraph::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios.');
        OpenGraph::setTitle('Grupo Robles & Yasikov');
        OpenGraph::setUrl('https://gruporobles.com.pe/contactanos');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/ecoplazaclub.png', 'size' => 300]);
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png', ['height' => 300, 'width' => 300]);

        JsonLdMulti::setTitle('Grupo Robles & Yasikov');
        JsonLdMulti::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios.');
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Grupo Robles & Yasikov');
            JsonLdMulti::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios.');
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
