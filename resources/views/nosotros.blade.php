@extends('master.master')



@section('css')

 <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/conocenos.css')}}">
<link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/formulario.css')}}">




<style type="text/css">
        
      

        .accordion-button{
            padding-left: 0px !important;
            
        }
        .accordion-header{
            font-weight: 200 !important;
        }


        .with-lines {
    display: flex;
    align-items: center;
}

.with-lines h3 {
    flex-grow: 1;
}

.with-lines::before,
.with-lines::after {
    content: "";
    flex-grow: 1;
    height: 2px;
    background-color: #fff;
    margin: 0 10px;
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
/*    background-color: #fff;*/
    background-color:  #FBFBFB;
    background-image: url("nuevaweb_assets/assets/img/arrow.png");
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


.video-proyect {
  height: 360px;
}


.video-proyect > iframe {
  height: 100%;
  width: 100%;
}
.video-proyect > img {
  object-fit: cover;
  height: 100% !important;
}



.bg-frm {
  padding: 40px 60px;
  background: url("nuevaweb_assets/assets/img/grid-teal.png")
    center center/auto repeat;
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
    </style>
@endsection


@section('content')



   



   
    <div class="d-flex  justify-content-center align-items-center" style=" position: relative;">
                
                 <img src="{{asset('nuevaweb_assets/assets/img/paisa.webp')}}" class="w-100 img-fluid  d-none d-sm-block"  >
                <img src="{{asset('nuevaweb_assets/assets/img/valores.webp')}}" class="w-100 img-fluid d-block d-sm-none"  >
                 <div class="container  d-flex justify-content-center justify-content-lg-start align-items-center  h-100 w-100" style="position:absolute;top: 0;z-index: 1;">
                    <h1 class="text-center family-700-one text-white">Nosotros</h1>

                     

                </div>

                <div class="overlay-proyectos" style=" backdrop-filter: blur(0px);  background: rgba(0, 150, 139, 0.3);
background: linear-gradient(90deg, rgba(0, 150, 139, 0.3) 35%, rgba(0, 92, 83, 0.3) 100%);
"></div> 
                 
        </div>

   


        <section class="container-xl container-lg container-md container-sm d-flex justify-content-start mb-5 mt-4">
        <!-- w-75 back -->
        <div class=" text-center  position-relative container-vision
          w-100 row row-cols-1 row-cols-xl-2  row-cols-lg-2 row-cols-md-2 g-2 justify-content-between ">
            <div class="px-3 border-lg-end py-2 py-lg-5">
                <h2 class="family-700-one color-green-2">Visión</h2>
                <p class="mb-0 text-dark mt-3" style="font-size:1.0rem">Ser una destacada inmobiliaria a nivel nacional, comprometida con la preservación del medio ambiente, siendo líder en el desarrollo de condominios ecológicos.</p>
            </div>
            <div class="px-3 py-2 py-lg-5">
                <h2 class="family-700-one color-green-2">Misión</h2>
                <p class="mb-0 text-dark mt-3" style="font-size:1.0rem">Desarrollar proyectos de vivienda sostenible en diversas regiones del Perú, proporcionando experiencias memorables a las familias que eligen construir sus hogares en entornos naturales.</p>
            </div>
           
        </div>
    </section>

     <section class="container-fluid pt-2 ">
        <div class="container-xl">
            <div class="row  row-cols-xl-2 row-cols-lg-2 g-4">
                <div >
                    <!-- <div class="position-relative container-video-faq d-flex justify-content-center align-items-center">
                        <i style="font-size: 4rem;" class="fa-brands fa-youtube text-white"></i>
                    </div> -->

                     <div id="video-proyect" class=" video-proyect position-relative">
                <button id="play-video-galery" class="btn position-absolute top-50 start-50 translate-middle z-2 play-galery" type="button"> <i style="font-size: 4rem;" class="fa-brands fa-youtube text-white"></i></button>
                <img id="image-video-proyect" class="img-fluid w-100" src='{{ asset("nuevaweb_assets/assets/img/banner-nosotros.webp") }}' alt="Foto del equipo de asesores inmobiliarios y personal administrativo del Grupo Robles & Yasikov">
                <div id="video-youtube-galery" class="d-none">
                    <div id="youtube-frame-proyect"></div>
                </div>
            </div>


                </div>
                
                <div class="order-md-first order-xl-last order-lg-last d-flex flex-column justify-content-center  align-items-start">
                    <h2 style="font-weight: 700;" class="family-700-one color-green-2">Somos Robles & Yasikov
                       
                    </h2>
                    <p style="font-size:1.0rem" class="mt-2">Somos una inmobiliaria con presencia al nivel nacional, contando con proyectos inmobiliarios en la Costa, Sierra y Selva del Perú. Nos especializamos en desarrollar proyectos ecoamigables y sostenibles con el paso del tiempo.  Estamos enfocados en brindar un servicio integral para la satisfacción de nuestros clientes al obtener un bien inmueble de calidad.</p>

                            <div class="w-100 d-flex justify-content-center align-items-center ">
                                <a href="{{url('/contactanos')}}" style="text-decoration: none;color:white" type="button" class="btn raleway-bold py-2 btn-link border border-1  bg-terce text-center mt-2">Comenzar Ahora</a>
                            </div>
                         
                    
                </div>
            </div>
        </div>

    </section>

    <!-- section futurista valores -->
    <section class="container-fluid py-1 mb-2">
        <div class="container-xl">
            <h2 style="font-weight: 700;" class="w-100  mt-5 family-700-one color-green-2">Conoce Nuestros Valores
            </h2>
            <p>Somos una familia que busca crecer de la mano de nuestros clientes con el fin de cumplir el sueño de la casa de campo o playa ideal.</p>
            <div class="row g-4">
               
                <div class="col-xl-12 col-lg-12  align-self-center ">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper pb-5">
                            <!-- Slides -->
                            <div class="swiper-slide text-white">
                                <div class="card-valores respeto position-relative  d-flex align-items-end">
                                    <div class="bg-trasparent d-none flex-column h-100 w-100 py-3 px-4">
                                        <h2>Sostenibilidad</h2>
                                        <p>Garantizamos la armonía de nuestros proyectos inmobiliarios con la naturaleza, con el fin de brindar calidad de vida a nuestros clientes.</p>
                                    </div>
                                    <span class="p-2  w-100">
                                        <h3 class="family-700-one with-lines">Sostenibilidad</h3>
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-slide text-white">
                                <div class="card-valores creatividad position-relative  d-flex align-items-end">
                                    <div class="bg-trasparent d-none flex-column h-100 w-100 py-3 px-4">
                                        <h2>Trabajo en Equipo</h2>
                                        <p>Formamos un sólido equipo de profesionales que trabaja eficazmente en conjunto para llevar acabo cada objetivo.</p>
                                    </div>
                                    <span class="p-2 w-100">
                                        <h3 class="family-700-one with-lines">Trabajo en Equipo</h3>
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-slide text-white">
                                <div class="card-valores empatia position-relative  d-flex align-items-end">
                                    <div class="bg-trasparent d-none flex-column h-100 w-100 py-3 px-4">
                                        <h2>Confiabilidad</h2>
                                        <p>Priorizamos la satisfacción de cada uno de nuestros clientes, guiándolo durante todo el proceso para conseguir el hogar de sus sueños.</p>
                                    </div>
                                    <span class="p-2 w-100">
                                        <h3 class="family-700-one with-lines">Confiabilidad</h3>
                                    </span>
                                </div>
                            </div>
                           
                        </div>

                        <div class="swiper-pagination"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- preguntas -->
   




    <section class="container-fluid py-2 mb-4">
        <div class="container-xl">
            <div class="row  row-cols-xl-1 row-cols-lg-1 g-4">
                
                
                <div class="order-md-first order-xl-last order-lg-last d-flex flex-column justify-content-between align-items-start">
                    <h2 style="font-weight: 700;" class="family-700-one color-green-2">Preguntas Frecuentes
                       
                    </h2>
                    

                     <div class="container-resort w-100">
                        <!-- acordion boostrap -->

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingOne">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                       ¿Cuántos proyectos tienen alrededor del país?
                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Contamos actualmente con 8 proyectos en los cuales podrás conectar con el mar o la naturaleza, exactamente ubicados en: La Libertad, Ayacucho, Chanchamayo y Oxapampa, siendo esta última ubicación la que alberga 5 proyectos inmobiliarios.</div>
                                </div>
                            </div>



                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingOnex">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOne">
                                       ¿Dónde se encuentran sus oficinas?
                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseOnex" class="accordion-collapse collapse" aria-labelledby="flush-headingOnex" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Actualmente, tenemos dos oficinas: una en Lima, situada en el edificio Capital Golf, y la segunda frente a la plaza de Oxapampa.</div>
                                </div>
                            </div>




                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingTwo">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                      ¿Cómo puedo programar una visita a sus oficinas? 
                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Puedes comunicarte con nuestros asesores directamente al WhatsApp o llamada telefónica donde te brindarán una asesoría personalizada. Además, podrás agendar una visita guiada al proyecto en el que muestres interés.</div>
                                </div>
                            </div>

                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingThree">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       ¿Cuáles son las opciones de pago para la adquisición de mi lote?
                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Ofrecemos flexibilidad en las formas de pago, incluyendo financiamiento directo con nosotros, también a través del banco Alfin y, finalmente, el pago al contado con el cual tienes un atractivo descuento.</div>
                                </div>
                            </div>




                            


                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

    </section>




   <div class="container-fluid bg-frm" style="padding-left: 20px;padding-right: 20px;">
       
       <section  class="container-xxl py-4 mb-2">
    

    <div class="row d-flex justify-content-center align-items-center">
      
      <div class="col-lg-6 d-none d-lg-block  text-center" >
       <img src="{{asset('nuevaweb_assets/assets/img/img-form.webp')}}" alt="7 Años de Experiencia" class="img-fluid">  

        
      </div>



       <div class="col-lg-6 shadow" style="background:  #FBFBFB">
            
               <h2 class="family-700-one color-green-2 contacto-span mt-5" style="padding:0px 40px">Encuentra el mejor lote </h2>
                <p style="padding:0px 40px" class="mt-5 contacto-span"><strong>¿Deseas agendar una cita o solicitar más información? </strong>Déjanos tus datos para que uno de nuestros asesores inmobiliarios te contacte.</p>


                  <div class="container" >
                        
                       <form class="" id="promocion-form"  method="POST"  action="" >
                           @csrf
                           <input type="hidden" name="formulario" id="formulario" value="formulario-conocenos">
                           


                           <div class="form-row">
                              <div class="input-data">
                                 <input type="text" id="nombre" name="nombre" required>
                                 <div class="underline"></div>
                                 <label for="">Nombres</label>
                              </div>
                              <div class="input-data">
                                 <input type="text" id="apellido" name="apellido" required>
                                 <div class="underline"></div>
                                 <label for="">Apellidos</label>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="input-data">
                                 <input type="text" id="email" name="email" required>
                                 <div class="underline"></div>
                                 <label for="">Correo</label>
                              </div>
                              <div class="input-data">
                                 <input type="text" id="movil" name="movil" required oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="9">
                                 <div class="underline"></div>
                                 <label for="">Celular</label>
                              </div>


                           </div>

                            <div class="form-row">
                                 <div class="input-data textarea">
                                    <textarea rows="8" cols="80" id="mensaje" name="mensaje" required></textarea>
                                    <br />
                                    <div class="underline"></div>
                                    <label for="">Dejanos un mensaje</label>

                                      </div>

                                </div>



                                 <div class="form-row">
                                 <div class="input-data ">
                                    
                                   

                                     <select id="proyecto" name="proyecto" class="form-select raleway-medium" aria-label="Default select example">
                                      
                                      <option selected value="">
                                          <Open>Seleccionar Proyecto
                                      </option>



                                      @php
                                          
                                          
                                          $condicion = config('sperant.getIdProject'); 

                                      @endphp

                                      
                                      @foreach($proyectos as $list)

                                           <option value="{{ $condicion ? $list->id_sperant : $list->idproyecto }}" data-slug="{{$list->rewrite}}">{{$list->descripcion}}</option>

                                      @endforeach

                                      
                                    </select>
                                    

                                  
                                   

                                      </div>

                                      <div class="input-data ">
                                    
                                   

                                     <select id="horario" name="horario" class="form-select raleway-medium" aria-label="Default select example">
                                      
                                      
                                      <option selected value="">
                                          <Open>Horario de Llamada
                                      </option>
                                     <option value="9:00">9:00</option>
                                      <option value="10:00">10:00</option>
                                       <option value="11:00">11:00</option>
                                       <option value="12:00">12:00</option>
                                       <option value="13:00">13:00</option>
                                       <option value="14:00">14:00</option>
                                       <option value="15:00">15:00</option>
                                       <option value="16:00">16:00</option>
                                       <option value="17:00">17:00</option>
                                       <option value="18:00">18:00</option>
                                    </select>
                                    

                                  
                                   

                                      </div>

                                </div>



                          


                              <div class="form-row">


                                <div class="input-data textarea">
                                      <small class="text-center">Al enviar este formulario estás aceptando nuestros <a target="_blank" href="{{url('/terminos')}}" class="color-green-2" style="text-decoration:underline;">términos y condiciones</a> y <a target="_blank"  href="{{url('/politicas')}}" class="color-green-2" style="text-decoration:underline;">las políticas de protección de datos.</a> </small>

                                       <button   type="button" id="btn-enviar-promo"  class="mt-4 w-100 btn raleway-bold py-2 bg-terce text-white">Solicitar Información</button>

                                </div>

                              </div>


                              <div class="form-row text-danger   px-4  py-4" style="margin-top:40px">
                                  
                                 <span id="errores" style="font-size:12px">
                                   
                                 </span>
                              </div>
                                
                            </form>
                        </div>



      </div>


    </div>
  </section>
   </div>


    
  

<div class="loading-container">
    <div class="loading-gif"></div>
</div>
@endsection


@section('js')



<script src="{{asset('nuevaweb_assets/js/effectCard.js')}}"></script>
<script>
    const swiper2 = new Swiper('.swiper', {
        // Optional parameters
        autoplay: {
            delay: 4000,
        },
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
         breakpoints: {
        // when window width is >= 320px
        420: {
          slidesPerView: 1,
        },
        // when window width is >= 480px
        600: {
          slidesPerView: 2,
        },
        // when window width is >= 640px
        1000: {
          slidesPerView: 3,
        }
      },
      
        // Navigation arrows
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

    });
</script>

 <script>

     var token_="{{ csrf_token() }}";
     var assetUrl = "{{ url('promociones/registrar') }}";
</script>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script type="text/javascript">

$( document ).ready(function() {
    
$("#btn-enviar-promo").on('click',(event)=>{

var slug=  $("#proyecto").find("option:selected").attr('data-slug');
                            
var url_final = "/proyectos/lotes/"+slug+"/gracias";


event.preventDefault();



 var loadingContainer = document.querySelector(".loading-container");
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
                    window.location.href = url_final
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

<script src="https://www.youtube.com/iframe_api"></script>

<script type="text/javascript">
    
let video_unico_proyecto = "NifrqANEiHg";

</script>
<script src="{{asset('nuevaweb_assets/js/galery.js')}}"></script>


<script type="text/javascript">
    
    window.addEventListener('resize', function() {
    var image = document.querySelector('.custom-image');
    if (window.innerWidth < 992) { 
       
        image.classList.remove('img-fluid');
    } else {
        
        image.classList.add('w-100', 'img-fluid');
    }
});


window.dispatchEvent(new Event('resize'));
</script>

@endsection
