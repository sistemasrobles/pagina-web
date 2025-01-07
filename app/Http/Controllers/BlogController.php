<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

class BlogController extends Controller
{
    public function blog(){
        $blog=blog::where('activo','=',1)->orderBy('created_at','desc')
        ->paginate(9);
    

        SEOMeta::setTitle('Grupo Robles & Yasikov - blog');
        SEOMeta::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
        SEOMeta::setCanonical('https://gruporobles.com.pe/blog');
        SEOMeta::addKeyword(['Grupo Robles & Yasikov', 'Blog', 'Grupo Robles & Yasikov','blog']);

        OpenGraph::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
        OpenGraph::setTitle('Grupo Robles & Yasikov - blog');
        OpenGraph::setUrl('https://gruporobles.com.pe/blog');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addProperty('locale', 'es_ES');

        OpenGraph::addImage('https://gruporobles.com.pe/img/banner/background.png');
        OpenGraph::addImage('https://gruporobles.com.pe/img/banner/background.png');
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/img/banner/background.png', 'size' => '100%']);
        OpenGraph::addImage('https://gruporobles.com.pe/img/banner/background.png', ['height' => '100%', 'width' => '100%']);

        JsonLdMulti::setTitle('Grupo Robles & Yasikov - blog');
        JsonLdMulti::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
        JsonLdMulti::setType('articles');
        JsonLdMulti::addImage('https://gruporobles.com.pe/img/banner/background.png');
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setTitle('Grupo Robles & Yasikov - blog');
            JsonLdMulti::setDescription('Somos Robles & Yasikov, una inmobiliaria con terrenos en la costa, sierra y selva del Perú. Nuestros proyectos inmobiliarios de alta calidad son ecoamigables.');
            JsonLdMulti::setType('articles');
            JsonLdMulti::addImage('https://gruporobles.com.pe/img/banner/background.png');
        }
        return view('blog',compact('blog'));
    }
    public function blogd($slug){


        $blog=blog::where('slug',$slug)->first();
        
        SEOMeta::setTitle($blog->titulo);
        SEOMeta::setDescription($blog->titulo);
        SEOMeta::addMeta('article:published_time', $blog->created_at->toW3CString(), 'property');
        
        SEOMeta::addKeyword([ 'Grupo Robles & Yasikov', 'inmobiliaria',$blog->titulo]);

        OpenGraph::setDescription($blog->titulo);
        OpenGraph::setTitle($blog->titulo);
        OpenGraph::setUrl('https://gruporobles.com.pe/detalle_blog/'.$blog->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'es_ES');
        OpenGraph::addProperty('locale:alternate', ['es_ES', 'en-us']);

        OpenGraph::addImage('https://gruporobles.com.pe/storage/blog/'.$blog->img);
        OpenGraph::addImage('https://gruporobles.com.pe/storage/blog/'.$blog->img);
        OpenGraph::addImage(['url' => 'https://gruporobles.com.pe/storage/blog/'.$blog->img, 'size' => '100%']);
        OpenGraph::addImage('https://gruporobles.com.pe/storage/blog/'.$blog->img, ['height' => '100%', 'width' => '100%']);

        JsonLd::setTitle($blog->titulo);
        JsonLd::setDescription($blog->titulo);
        JsonLd::setType('Article');
        JsonLd::addImage('https://gruporobles.com.pe/storage/blog/'.$blog->img);

        // OR with multi

        JsonLdMulti::setTitle($blog->titulo);
        JsonLdMulti::setDescription($blog->titulo);
        JsonLdMulti::setType('Article');
        JsonLdMulti::addImage('https://gruporobles.com.pe/storage/blog/'.$blog->img);
        if(! JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd('Blog - '.$blog->titulo);
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Blog - '.$blog->titulo);
        }

        // Namespace URI: http://ogp.me/ns/article#
        // article
        OpenGraph::setTitle('https://gruporobles.com.pe/detalle_blog/'.$blog->slug)
            ->setDescription($blog->titulo)
            ->setType('article')
            ->setArticle([
                'published_time' => $blog->created_at->toW3CString(),
                'modified_time' =>$blog->updated_at->toW3CString(),
                'expiration_time' => $blog->created_at->toW3CString(),
                'author' => 'Grupo Robles & Yasikov',
                'section' => 'blog',
                'tag' => 'Inmobiliario'
            ]);






        $blogs=blog::where('activo','=',1)->where('slug','<>',$slug)->orderBy('id','desc')->paginate(3);
     
       

        return view('detalle-blog',compact('blog','blogs'));
    }
}
