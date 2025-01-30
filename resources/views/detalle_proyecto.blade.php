@extends('master.master')
@section('css')


  <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/formulario.css')}}">
    <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/proyectDetail.css')}}">

    <style type="text/css">
        
       


        .swiper-modal .swiper-button-next , .swiper-modal .swiper-button-prev{

        
            color:#fff;
             border:1px solid  var(--color-primary-oscuro);
           background-color:  var(--color-primary-oscuro);
            padding: 1.725rem;
            border-radius: 0.25rem;
          box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }

        .header-form{
            padding-top: 120px;
        }


        @media (max-width: 991px) {

            .header-form {
                padding-top: 10px;
            }
        }


         .form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color:  #FBFBFB;
    background-image: url("{{asset('nuevaweb_assets/assets/img/arrow.png')}}");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 26px 26px;
    border: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.form-select:focus {
    border-color: none;
    outline: 0;
    box-shadow: none;
}



#divPantallaCompleta {
    display: none;
    position: fixed;
   top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 999999;
    
}






    

    @media (max-width: 992px) { 


        .only-detalle-proyect{
            display: block !important;
        }

         #pulsa-wsp{
            display: none;
        }

    }


     @media (min-width: 992px) { 


        #pulsa-wsp{
            display: block;
        }

    }


    #regresa-frame {

    position:absolute;
    top:180px;
    right: 5px;
    z-index: 999999;
    width: 120px;
    border-radius: 7px;
    background: #05a07d ;
    display: none;

    
  }


    @media (max-width:768px) {
  
  #regresa-frame {

    top: 60px;
    
  }


}


.textarea textarea{
background:  #FBFBFB;

}
.input-data input{

  background:  #FBFBFB;
}
.textarea label{
 background:  #FBFBFB;
}



.img-detalle-view {
    height: auto; 
}


@media (max-width: 600px) {
    .img-detalle-view {
        height: 350px; 
    }
}


@media (max-width: 600px) {
        #image-video-proyect {
            content: url('{{ asset("/storage/$proyetoactual->link_video_bg_mobil") }}');
            max-height: 350px; 
            width: 100%;
        }
    }


    </style>




@endsection
@section('content')
@inject('telefono_footer', 'App\Http\Controllers\PoryectoController')
 <div id="divPantallaCompleta">
      

      <iframe class="frame-306" src="" width="100%" height="100%"></iframe>

      <button class="btn  text-white " id="regresa-frame">Regresar</button>
    </div>

<div class="position-relative"  >

   
    <main class="container-fluid text-center p-5 bg-main" >
        <div class="position-absolute top-0 video-proyect-main">
           
            <video src="{{ asset('nuevaweb_assets/assets/img/videos/' . $proyetoactual->video_detalle) }}" autoplay muted loop></video>
        </div>
        <div class="container-xl container-main-margin">
            <div class="d-flex flex-column gap-4 width-max-proyect">
                <div style="width: max-content;" class="text-white text-start trans-main-proyect-green py-2 px-4 rounded-3">
                    <p style="font-weight: 300;" class="mb-0">proyecto</p>
                    <h1 style="font-weight: 500;" class="raleway-medium">{{$proyetoactual->descripcion}}</h1>
                </div>

                <div class="container-title-info-main d-flex text-white flex-column flex-xl-row 
                flex-lg-row flex-sm-column justify-content-xl-between align-items-xl-center">
                     <h2 style="font-weight: 700;" class="text-start d-none"><i>{{$proyetoactual->frase}}</i></h2>


                     
                    <a href="{{ url('download/' . $proyetoactual->brochure) }}" type="button" class="border btn px-4 btn-white text-nowrap py-2 raleway-medium fs-6 text-white shadow d-none" style="height: max-content; width:max-content">Descargar brochure <i class="fa-solid fa-download ms-2"></i></a>

                   

                </div>
                <!-- section main cuadro -->
                <div class="row row-cols-2 row-cols-xl-2  row-cols-lg-2 row-cols-md-2 raleway-medium container-grid-main-cuadro  fs-3 py-3  bg-white  justify-content-between  rounded-0 ">
                    
                    <div class="d-flex gap-2 flex-column  align-items-center">
                        
                        <h6 class="text-gris fs-6"><strong>Separa tu lote desde</strong></h6>
                        <h6 class="text-gris fs-6" style="font-size: 30px !important; font-weight: 900; color: #005c53">
                        <span style="font-size: 18px; position: relative; top: -5px;">S/</span>{{$proyetoactual->separa}}
                        </h6>
                    </div>
                    <div class="d-flex gap-2  flex-column align-items-center justify-content-center">
                        
                        <div  class="d-flex flex-column  align-items-start "  >

                            <h6 class="color-green-2 fs-6 d-none d-sm-block"><i class="fa-solid fa  fa-location-arrow me-2    p-1 rounded-2"></i>{{$proyetoactual->ubicacion}}</h6>


                             <h6 class="color-green-2 fs-6 d-block d-sm-none">{{$proyetoactual->region}}</h6>



                        <h6 class="text-gris fs-6 d-none d-sm-block" > <i class=" fa-solid fa-check me-2   p-1 rounded-2"></i> {{$proyetoactual->estado_label}} </h6>

                         <h6 class="text-gris fs-6 d-block d-sm-none" >  {{$proyetoactual->estado_label}} </h6>



                        </div>
                        
                    </div>
                 

                </div>
            </div>
        </div>
    </main>
    <!-- SECTION SUB-NAV -->
    <div class="container-fluid raleway-medium bg-gris position-sticky top-0" style="z-index: 4;">
        <div class="container-xl sub-nav-container ">
            <div class="d-flex flex-wrap navegador-proyect align-items-center py-2 px-0" style="max-width: 700px;gap:20px 0">
                <div class="sub-nav border-end border-dark px-3 position-relative link-proyect">Ubicación</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">Acerca</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">Galería</div>
                 <div class="sub-nav border-end border-dark px-3 position-relative">Recorridos</div>
                <div class="sub-nav border-end border-dark px-3 position-relative">Zona</div>
               
                
                <div class="sub-nav px-3 position-relative">Financiamiento</div> 
            </div>
        </div>
    </div>

    <!-- Ubicanos -->

    <div class="container">
        <div class="row">
                
            <div class="col-lg-8">
                 <section id="ubicación" class="container-xl bg-white py-5 " style="margin:0px;padding: 0px;">
        <div class="container-xl"  style="margin:0px;padding: 0px;">
            <span>
                <h2 style="font-weight: 700;" class="color-green-2">Ubicación de nuestro proyecto
</h2>
                <p class="sub-title-section">Contamos con la mejor zona para <strong>comprar tu lote</strong>, estamos ubicados en el corazón de <strong>{{ $proyetoactual->ubicacion }}</strong>.
        </p>
            </span>
            <!-- iconos infon -->
            <div class="row row-cols-lg-3  py-2 mb-4 gy-4 width-max-proyect align-items-center justify-content-center">
                <div class="d-flex gap-3 align-items-center">
                  


                     <img src="{{asset('nuevaweb_assets/assets/img/clock.svg')}}" alt="ubicación del proyecto {{ $proyetoactual->descripcion }}" class="bg bg-terce rounded-circle avatar-lg p-2" style="height: 60px;width: 60px;">



                    <p class="mb-0 d-none d-lg-block"><small>{!! $proyetoactual->referencia_1 !!}</small></p>
                    <p class="mb-0 d-block d-lg-none"><small>{{ $proyetoactual->referencia_1_movil }}</small></p>


                </div>
                <div class="d-flex gap-3 align-items-center">
                    <img src="{{asset('nuevaweb_assets/assets/img/compass.svg')}}" alt="ubicación del proyecto {{ $proyetoactual->descripcion }}" class="bg bg-terce rounded-circle avatar-lg p-2 " style="height: 60px;width: 60px;">
                    <p class="mb-0 d-none d-lg-block" ><small>{!! $proyetoactual->referencia_2 !!}</small></p>
                    <p class="mb-0 d-block d-lg-none"><small>{{ $proyetoactual->referencia_2_movil }}</small></p>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <img src="{{asset('nuevaweb_assets/assets/img/map-pin.svg')}}" alt="ubicación del proyecto {{ $proyetoactual->descripcion }}" class="bg bg-terce rounded-circle avatar-lg p-2" style="height: 60px;width: 60px;">
                    <p class="mb-0"><small>{!! $proyetoactual->referencia_3 !!}</small></p>
                </div>
                
            </div>
            <div class="width-max-proyect position-relativex  " >




                  <img class="img-fluid " src='{{ asset("/storage/$proyetoactual->img_mapa") }}' alt="mapa de ubicación proyecto {{$proyetoactual->descripcion}} | Robles & Yasikov" >

               
                <div class="d-flex gap-3 position-absolutex bottom-0 w-100 align-items-center justify-content-center px-3 py-2 bg-gris">

                    <a class="w-100 bg-white py-3 px-3 rounded-2 text-center" href="https://www.waze.com/ul?ll={{$proyetoactual->lat}}%2C{{$proyetoactual->long}}&navigate=yes" target="_blank" ><img src="{{asset('nuevaweb_assets/assets/img/waze.svg')}}" alt="ubicación del proyecto {{ $proyetoactual->descripcion }} en waze"> Ver en Waze</a>

                    <a class="w-100 bg-white py-3 px-3 rounded-2 text-center" href="https://www.google.com/maps/dir/?api=1&destination={{$proyetoactual->lat}}%2C{{$proyetoactual->long}}" target="_blank"><img src="{{asset('nuevaweb_assets/assets/img/maps.svg')}}" alt="ubicación del proyecto {{ $proyetoactual->descripcion }} en google maps"> Ver en Maps</a>

                   
                </div>
               
            </div>


          

        </div>
    </section>

    <!-- Caracteristicas -->


    @if($proyetoactual->idproyecto == 9)


         <section id="acerca" class="container-fluid py-5 px-3 bg-gris">
        <div class="container-xl">
            <span>
                <h2 class="family-700-one color-green-2" style="font-weight: 700;">Beneficios</h2>
                <p class="sub-title-section">Ambientes ideales para ti en nuestro condominio {{ $proyetoactual->descripcion}}</p>
            </span>
            <!-- iconos infon -->
            <div class="row row-cols-2 row-cols-xl-3 row-cols-md-3 row-cols-sm-2 gy-3 width-max-proyect">

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/juego_nino_mancora.svg')}}" alt="juegos para niños en el proyecto {{ $proyetoactual->descripcion }} " style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Juegos para niños</p>
                    </div>
                </div>

                

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                         <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/local_comercial_mancora.svg')}}" alt="locales comerciales en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Locales comerciales</p>
                    </div>
                </div>

               
                <!-- col2 -->
                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/sauna_mancora.svg')}}" alt="saunas en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Sauna & Spa</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 justify-content-center align-items-center bg-white py-3 rounded-2">
                        <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/piscina_mancora.svg')}}" alt="piscinas en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Piscina</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 justify-content-center align-items-center bg-white py-3 rounded-2">
                         <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/lgauna_privada_mancora.svg')}}" alt="laguna privada en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Laguna Privada</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                       <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/vista_playa_mancora.svg')}}" alt="acceso a las playas en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Acceso directo a playa</p>
                    </div>
                </div>

               
            </div>
        </div>
    </section>


    @else


        <section id="acerca" class="container-fluid py-5 px-3 bg-gris">
        <div class="container-xl">
            <span>
                <h2 class="family-700-one color-green-2" style="font-weight: 700;">Beneficios</h2>
                <p class="sub-title-section">Ambientes ideales para ti en nuestro condominio  {{ $proyetoactual->descripcion}}</p>
            </span>
            <!-- iconos infon -->
            <div class="row row-cols-2 row-cols-xl-3 row-cols-md-3 row-cols-sm-2 gy-3 width-max-proyect">

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/servicios.svg')}}" alt="servicios basicos en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Servicios Básicos</p>
                    </div>
                </div>

                

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                         <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/pistas.svg')}}" alt="vias de acceso en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Vías de acceso</p>
                    </div>
                </div>

               
                <!-- col2 -->
                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                        <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/portico.svg')}}" alt="porticos de ingreso en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Pórtico de ingreso</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 justify-content-center align-items-center bg-white py-3 rounded-2">
                        <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/club.svg')}}" alt="oportunidad de inversión en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Oportunidad de inversión</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 justify-content-center align-items-center bg-white py-3 rounded-2">
                         <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/cerco-perimetrico.svg')}}" alt="cerco vivo en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Cerco vivo (entre lotes y perimétrico)</p>
                    </div>
                </div>

                <div>
                    <div class="d-flex h-100 flex-column gap-2 align-items-center bg-white py-3 rounded-2">
                       <img src="{{asset('nuevaweb_assets/assets/img/iconos-proyectos/vigilancia.svg')}}" alt="vigilancia 24 horas en el proyecto {{ $proyetoactual->descripcion }}" style="height:50px;width: 50px;">
                        <p class="mb-0 fs-9 text-center">Caseta de vigilancia las 24 horas</p>
                    </div>
                </div>

               
            </div>
        </div>
    </section>


    @endif


   
    <!--Section Galeria  -->
    <section id="galería" class="container-xl py-5" style="margin:0px;padding: 0px;">
        <span>
            <h2 style="font-weight: 700;" class="color-green-2">Fotos y videos</h2>
            <p class="sub-title-section">{!! $proyetoactual->des_fotos_videos !!}</p>
        </span>

        <div class="width-max-proyect shadow py-2 px-4">
            <div class="d-flex gap-2">
                 <button type="button" class="btn w-100 mb-2 btn-galery-view active-option-galery">Videos</button>
                <button type="button" class="btn w-100 mb-2 btn-galery-view ">Fotos</button>
               
            </div>
            <!-- swiper proyectos -->
            <div id="fotos-swiper" class="swiper-proyecto d-none  position-relative overflow-hidden py-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    @foreach($renders as $list)


                        <div class="swiper-slide"><img class="img-fluid w-100 img-detalle-view" src='{{ asset("/storage/$list->img") }}' alt="imagenes del proyecto {{$proyetoactual->descripcion}} | Robles & Yasikov" style="height:auto"></div>


                    @endforeach

                   
                 
                </div>

              
                <div class="swiper-pagination" ></div>

            </div>
            <div id="video-proyect" class="d-none video-proyect position-relative active-view-galery">
                <button id="play-video-galery" class="btn position-absolute top-50 start-50 translate-middle z-2 play-galery" type="button"><i class="text-white fa-brands fa-youtube"></i></button>

                
               
            

                <img id="image-video-proyect" class="img-fluid d-block" src="{{ asset("/storage/$proyetoactual->link_video_bg") }}"alt="renders del proyecto">



                <div id="video-youtube-galery" class="d-none">
                    <div id="youtube-frame-proyect"></div>
                </div>
            </div>
        </div>
    </section>



     <!-- Conoce el proyecto -->
    

<!-- ver proyecto 3d -->
                <section class="container-xl py-1" id="recorridos">
                    <span>
                        <h2 style="font-weight: 700;" class="color-green-2">Mira nuestro proyecto</h2>
                        <p class="sub-title-section">{{$proyetoactual->turismo_conocido}}</p>
                        <p class="width-max-proyect"> {!! $proyetoactual->descripcion_lotes !!}</p>
                    </span>

                   

                    <!-- image direction 3d -->
                    <div class="width-max-proyect " style="position:relative;" >
                        <img class="img-fluid w-100 rounded-2"  src='{{ asset("/storage/$proyetoactual->img_360") }}' alt="imagen panoramica del proyecto {{$proyetoactual->descripcion}}">

                        <div style="position:absolute;top: 0;height: 100%;width: 100%;background: rgba(0, 0, 0, 0.4);"></div>
                        <div style="position:absolute;top:0;color:white;height: 100%;width: 100%;" class="d-flex flex-column justify-content-center align-items-center text-center">

                             @if(!in_array($proyetoactual->idproyecto, [6, 7 ,8,9,10]))
                             
                            <img class="" src="{{asset('nuevaweb_assets/assets/img/tour_virtual_icon.svg')}}" alt="imagen panoramica del proyecto {{$proyetoactual->descripcion}}">
                            
                           
                           <button id="rendereiza-360" type="button" class="border btn  btn-white  py-2 raleway-medium fs-6 text-white shadow mt-4" style="height: max-content; width:max-content">Iniciar Tour</button>

                           @endif
                        </div>
                    </div>
                </section>


                


                <section  id="zona" class="container-xl py-5">
        <span>
            <h2 style="font-weight: 700;" class="color-green-2">¡Conoce  {{$proyetoactual->region}} !</h2>
            <p class="sub-title-section">{{$proyetoactual->turismo_conocido}}</p>
            <p class="width-max-proyect"> {!! $proyetoactual->descripcion_turismo !!}</p>
        </span>




        <div class="width-max-proyect">

            <div class="galery-bento-grid w-100">


                @foreach($turismo as $key=>$list)


                <div class="image{{($key+1)}} slider-bento">
                    <img class="img-bento rounded-2" src='{{ asset("/storage/$list->img") }}' alt="zontas turisticas del proyecto {{$proyetoactual->descripcion}}">
                </div>


                @endforeach


            </div>

        </div>

    </section>

            </div>

            <div class="col-lg-4 " id="formulario-contacto" >

                <div class="sticky-top  header-form" style="z-index: 0;">
                   
                   
                    
                   @include('master.formulario')
                   


                </div>
                
            </div>
        </div>
    </div>




   

    <div class="container" >
        <div class="row">
            
            <div class="col-lg-8">
                


                



                <section class="container-xl py-5 d-none" id="financiamiento">
                    <span>
                        <h2 style="font-weight: 700;" class="color-green-2">Financiamiento</h2>
                         <p class="sub-title-section">¡Reserva tu lote hoy mismo!</p>
                        
                        <table class="table mt-5 shadow" style="">
                            <thead class="bg-terce text-white">
                                <tr align="center">
                                    <td  class="py-3 border-end">Cuotas mensuales</td>
                                    <td  class="py-3">Dscto. al contado (*)</td>
                                </tr>
                            </thead>
                            <tbody >
                                
                                <tr align="center" class="">
                                    
                                    <td class="p-3"><small>Desde :</small> <br><span style="font-size:40px;font-weight: 700;"><span style="font-size: 18px; position: relative; top: -15px;">S/</span> 1,000</span></td>


                                     <td class="p-3"><small>Hasta :</small> <br><span style="font-size:40px;font-weight: 700;"><span style="font-size: 18px; position: relative; top: -15px;">S/</span> 13,000</span></td>
                                </tr>
                                 <tr>
                                    
                                    <td class="p-3"><i class="fa-solid fa  fa-check me-3 bg-terce text-white   p-1 rounded-2"style="font-size: 1.1rem;"></i>Lotes desde S/ 1200,82 </td>
                                    <td class="p-3"><i class="fa-solid fa  fa-check me-3 bg-terce text-white   p-1 rounded-2"style="font-size: 1.1rem;"></i>Descuento financiado hasta S/ 30,455</td>
                                </tr>
                                 <tr>
                                    
                                    <td class="p-3"><i class="fa-solid fa  fa-check me-3 bg-terce text-white   p-1 rounded-2"style="font-size: 1.1rem;"></i>Inicial desde: S/ 4,264</td>
                                    <td class="p-3"><i class="fa-solid fa  fa-check me-3 bg-terce text-white   p-1 rounded-2"style="font-size: 1.1rem;"></i>Crédito Directo</td>
                                </tr>
                                 <tr>
                                    
                                    <td class="p-3"><i class="fa-solid fa  fa-check me-3 bg-terce text-white   p-1 rounded-2"style="font-size: 1.1rem;"></i>Inicial hasta en 12 meses sin intereses <span class="text-danger">(*)</span></td>
                                    <td class="p-3"><i class="fa-solid fa  fa-check me-3 bg-terce text-white   p-1 rounded-2"style="font-size: 1.1rem;"></i>Sin evaluación crediticia</td>
                                </tr>
                            </tbody>
                        </table>
                    </span>
                    
                </section>




            




            </div>
        </div>
    </div>

    
  


    



   
 </div>


 <!-- modal slider -->
    <div id="container-modal-swiper" class="modal-swiper d-none-swiper container-fluid">
        <span class="position-absolute  end-close " id="close-modal"><i class="text-white fs-3 fa-regular fa-circle-xmark"></i></span>
        <div class="container-md mid-slider">
            <div class="swiper-modal">
                <div class="swiper-wrapper" id="modal-proyect-wrapper">
                </div>
                <div class="swiper-pagination text-white"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>


    <div class="loading-container">
    <div class="loading-gif"></div>
</div>

@endsection



@section('js')

<script type="text/javascript">
    let dataTurismo=  {!! json_encode($turismo) !!};

    dataTurismo.forEach(function(turismoItem) {
    
            turismoItem.image = '/storage/'+turismoItem.img; 
    
    });
    
  
</script>
<script type="module" src="{{asset('nuevaweb_assets/js/modalSlider.js')}}"></script>
<script src="{{asset('nuevaweb_assets/js/hiddenUrl.js')}}"></script>

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

    const swiper = new Swiper(`.swiper-proyecto`, {
        // Optional parameters
        autoplay: {
            delay: 4000,
        },
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const swiper2 = new Swiper(".swiper-modal", {
        // Optional parameters
        autoplay: {
            delay: 4000,
        },
        spaceBetween: 30,
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script type="text/javascript">
    
let video_unico_proyecto = "{{ $proyetoactual->link_video }}";

</script>

<script src="{{asset('nuevaweb_assets/js/galery.js')}}"></script>

<script src="https://www.youtube.com/iframe_api"></script>




 <script>

     var slug ="{{$proyetoactual->rewrite}}";

     var token_="{{ csrf_token() }}";
     var assetUrl = "{{ url('promociones/registrar') }}";
</script>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script type="text/javascript">

$( document ).ready(function() {
    
$("#btn-enviar-promo").on('click',(event)=>{

event.preventDefault();

 var loadingContainer = document.querySelector(".loading-container");

 event.preventDefault()
    let data =   new FormData($("#promocion-form")[0])
    data.append( "_token",token_)



    var urlActual = window.location.href;


    var url = new URL(urlActual);
    var utm_source = url.searchParams.get("utm_source");
    var utm_medium = url.searchParams.get("utm_medium");
    var utm_campaign = url.searchParams.get("utm_campaign");
    var utm_term = url.searchParams.get("utm_term");
    var utm_content = url.searchParams.get("utm_content");



      data.append("utm_source",utm_source)
      data.append("utm_medium",utm_medium)
      data.append("utm_campaign",utm_campaign)
      data.append("utm_term",utm_term)
      data.append("utm_content",utm_content)


      
    $.ajax({
        "url":assetUrl,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
          beforeSend: function() {


         
              loadingContainer.style.display = "flex"; 
              loadingContainer.style.visibility = "visible";
        },
        'success': function(response){
            
              loadingContainer.style.display = "none";
          loadingContainer.style.visibility = "hidden";
          
          $("#errores").text('');

            if(response.status=='ok'){

               

                $("#promocion-form")[0].reset()


                  Swal.fire({

                  icon: 'success',
                  title: 'Datos Guardados correctamente',
                  showConfirmButton: false,
                  timer: 1500

                })


                
                  

                     setTimeout(function() {
                    window.location.href = "/proyectos/lotes/"+slug+"/gracias";
                  }, 2000); 

            }else{


                if(response.status=='error'){


                    Swal.fire({

                   icon: 'error',
                    title: response.description,
                    showConfirmButton: false,
                    timer: 1500

                  })


                }
                
                var data = response.data;

                var str = '';

                for(let i=0;i<data.length;i++){
                  str += data[i]+'<br>';
                  
                }

                $("#errores").html(str);

              



            }
        },
        'error':(response)=>{

           console.log(response)


        }
    })
})


});

  

</script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    var enlaceReunion = document.getElementById("enlace-reunion");

    enlaceReunion.addEventListener("click", function(event) {
        event.preventDefault(); // 
        var targetId = this.getAttribute("href").substring(1); 
        var targetElement = document.getElementById(targetId); 
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: "smooth" }); 
        }
    });
});
</script>


<script type="text/javascript">
    
var renderiza = document.getElementById("rendereiza-360");

var divPantallaCompleta = document.getElementById("divPantallaCompleta");

var frame306 = document.querySelector(".frame-306");

var regresaFrame = document.getElementById("regresa-frame");

  renderiza.addEventListener("click", function(event) {
      


         divPantallaCompleta.style.display = "block";
          

          frame306.src = "{{$proyetoactual->url_360}}";

          setTimeout(function() {
                
                regresaFrame.style.display = "block";
        }, 2500); 

    });





 regresaFrame.addEventListener("click", function(event) {
      


         divPantallaCompleta.style.display = "none";
         regresaFrame.style.display = "none";
          frame306.src = "#";

    });


</script>
@endsection
