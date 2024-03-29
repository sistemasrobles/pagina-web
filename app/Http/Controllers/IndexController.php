<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;
use App\blog;
use App\proyectos;
use App\slider;


class IndexController extends Controller
{


    public function index()
    {

        SEOMeta::setTitle('Grupo Robles & Yasikov');
        SEOMeta::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios que contarán con una zona de club house.');
        SEOMeta::setCanonical('https://gruporobles.com.pe/');
        SEOMeta::addKeyword(['Grupo Robles & Yasikov', 'desarrolladora de proyectos', 'eco plaza']);

        OpenGraph::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios que contarán con una zona de club house.');
        OpenGraph::setTitle('Grupo Robles & Yasikov');
        OpenGraph::setUrl('https://gruporobles.com.pe/');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/ecoplazaclub.png', 'size' => 300]);
        OpenGraph::addImage('https://gruporobles.com.pe/ecoplazaclub.png', ['height' => 300, 'width' => 300]);

        JsonLdMulti::setTitle('Grupo Robles & Yasikov');
        JsonLdMulti::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios que contarán con una zona de club house.');
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Grupo Robles & Yasikov');
            JsonLdMulti::setDescription('En el Grupo Robles & Yasikov buscamos brindarte proyectos inmobiliarios de calidad, ofreciéndote lotes y cabañas dentro de nuestros exclusivos condominios que contarán con una zona de club house.');
            JsonLdMulti::setType('Article');
            JsonLdMulti::addImage('https://gruporobles.com.pe/ecoplazaclub.png');
        }

        $sliders=slider::where('estado_slider','=','1')->orderBy('posicion','asc')->get();


        $blog=blog::where('slug','<>','robles-tours-encuentra-el-lote-de-tus-suenos-en-oxapampa')->orderBy('id','desc')->paginate(4);
        
        $proyectos = proyectos::where('estado_proyecto','=','1')->get();
        

        return view('welcome',compact('sliders','blog','proyectos'));
    }
}
