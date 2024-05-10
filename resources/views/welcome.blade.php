@extends('master.master')

@section('css')

  <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/formulario.css')}}">
  
 <style type="text/css">

      main {
            position: relative;

            min-height: auto;

        }
    video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index:1;
            
        }

        .overlay-video{

           width: 100%;
            height: 100%;
          position: absolute;
          top: 0;
          background: rgba(0,0,0,0.4);
          z-index:2;
        }



        


       main .swiper {
      width: 100%;
      height: 100%;
    }

    main .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    main .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


        main .swiper-button-next , main .swiper-button-prev{

        
        color:#fff;
             border:1px solid  var(--color-primary-oscuro);
           background-color:  var(--color-primary-oscuro);
            padding: 1.225rem;
            border-radius: 0.25rem;
          box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
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

        <!-- Magnific Popup -->
  <link href="{{asset('magnific-popup/magnific-popup.css')}}" rel="stylesheet">

@endsection

@section('content')



<main class="" style="">
    <div class=" swiper mySwiperBanner ">
    <div class="swiper-wrapper">

        @foreach($sliders as $values)

         

       <div class="swiper-slide "> 

        <a href="{{$values->link}}" class="w-100">

          <img loading="lazy" src="/storage/{{$values->img}}" alt="{{$values->alt}}" class=" img-fluid d-none d-sm-block">
          <img loading="lazy" src="/storage/{{$values->banner_movil}}" alt="{{$values->alt}}" class=" img-fluid d-block d-sm-none">

        </a>


      </div>



        @endforeach 


     

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </main>

  <!-- Nuestros proyectos -->
  <section class="container-xl  py-5 ">

    
    <div class="row  d-flex justify-content-center align-items-center py-3  ">
      
      <div class="col-12 col-lg-8 ">
         <h2 class="text-left  title-proyect family-700-one margin-0" >Nuestros Proyectos</h2>
         <p class="mt-2">Conoce más a detalle nuestros <strong>proyectos inmobiliarios<strong> que tenemos al interior del país</p>
      </div>

      <div class="col-12 col-lg-4  text-end d-none d-lg-block">
          <a type="button"  href="{{url('/proyectos')}}"class="btn bg-terce border-white py-2  px-5 raleway-medium text-white" style="">Ver Todos</a>
      </div>
    </div>
   

  
          
         

    <!-- Slider main container -->
    <div class="swiper swiperProyectos h-100 w-100 d-flex justify-content-center align-items-center">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper pb-5 " id="swiper-padre">
        <!-- Slides -->

      </div>
      <!-- Paginado slider -->
      <div class="swiper-pagination " style=""></div>

    </div>
  </section>


  <!-- Section Años de experencia -->
  <section class="container-xl container-experiencia px-4  ">
    <div class="row row-cols-xl-2 row-cols-lg-2 row-cols-md-1 justify-content-between g-4 align-items-center">
      <div class=" d-flex flex-column gap-3">
        <h1 class="family-700-one color-green-2">Grupo Robles & Yasikov: Haciendo feliz a más de 500 familias</h1>
        <p>Te brindamos <strong>proyectos inmobiliarios</strong> ecoamigables de alta calidad, con lotes y cabañas dentro de nuestros exclusivos condominios en zonas estratégicas del país como <strong>Oxapampa, Chanchamayo, La Libertad y Máncora</strong>.

        </p>
        <ul class="list-group">
           <li class="d-flex gap-2 align-items-center raleway-medium my-1">
           <i class="fa-solid fa  fa-check me-2 bg-terce text-white   p-1 rounded-2"style="font-size: 1.5rem;"></i>
           Proyectos inmobiliarios en la costa, sierra y selva del Perú.
          </li>
          <li class="d-flex gap-2 align-items-center raleway-medium  my-1">
            <i class="fa-solid fa  fa-check me-2 bg-terce text-white   p-1 rounded-2"style="font-size: 1.5rem;"></i>
            Condominios con zona de club house.
          </li>
          <li class="d-flex gap-2 align-items-center raleway-medium  my-1"><i class="fa-solid fa  fa-check me-2 bg-terce text-white   p-1 rounded-2"style="font-size: 1.5rem;"></i> En Grupo Robles & Yasikov, tu inversión está en manos seguras.</li>
        </ul>
      </div>
      <div class=" d-flex justify-content-xl-end justify-content-lg-end justify-content-md-center justify-content-center">
        <img loading="lazy" src="{{asset('nuevaweb_assets/assets/img/nosotros.webp')}}" alt="Equipo de asesores inmobiliarios de Robles & Yasikov saludando a la cámara junto a Alexandra Graña">
      </div>
    </div>
  </section>


  <!-- Section Noticias -->
  <section class="container-xxl text-white py-4 ">
    <div class="row row-cols-xl-2 row-cols-lg-2 row-cols-md-1 justify-content-center">
      <div class="bg-campo d-flex gap-5 flex-column">
        <button type="button" class="btn-superior-noticia btn py-1 btn-link text-white  border border-white raleway-medium rounded-2">Casas de campo</button>
        <h2>Robles Tours: Encuentra el lote de tus sueños en Oxapampa</h2>
        <a href="{{url('detalle_blog/robles-tours-encuentra-el-lote-de-tus-suenos-en-oxapampa')}}" type="button" class="btn py-2 px-4 btn-ver-mas-noticias raleway-medium ">Leer Artículo <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class=" align-self-center container-slider-col2 position-relative">
        <!-- swiper noticias -->
        <div class="swiper-noticias py-4">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
           

            @foreach($blog as $list)


               <div class="swiper-slide  overflow-hidden">
              

               <div class="row container-card-noticias">
                <div class="col-12"><img loading="lazy" src="/storage/blog/{{$list->img}}" alt="{{$list->alt}}"></div>
                <div class="p-4">
                    <h5 class="family-700-one fs-5 color-green-2">{{$list->titulo}}</h5>
                    <p>{{$list->descripcion_min}}</p>
                    <a href="detalle_blog/{{$list->slug}}" type="button" class="btn bg-terce text-white px-4 raleway-medium ">Ver más</a>
                </div>
            </div>


            </div>



            @endforeach


           

          
          </div>

          
          <div class="swiper-pagination noticias"></div>
        </div>

      </div>
    </div>
    </div>
  </section>

   <div class="container-fluid bg-frm " style="padding-left: 20px;padding-right: 20px;" >

     
     <section  class="container-xxl py-4 mb-2 "  >
    

    <div class="row d-flex justify-content-center align-items-center">
      
      <div class="col-lg-6 d-none d-lg-block  text-center" >
       <img loading="lazy" src="{{asset('nuevaweb_assets/assets/img/img-form.webp')}}" alt="Vistas del paisaje de dos proyectos inmobiliarios de Robles & Yakisov en Oxapampa con el texto Financia tu Hogar Ideal e Invierte Seguro" class="img-fluid" >  

        
      </div>



       <div class="col-lg-6 shadow " style="background:  #FBFBFB">
            
                 <h2 class="family-700-one color-green-2 contacto-span mt-5" style="padding:0px 40px">Encuentra el mejor lote </h2>
                <p style="padding:0px 40px" class="mt-5 contacto-span"><strong>¿Deseas agendar una cita o solicitar más información? </strong>Déjanos tus datos para que uno de nuestros asesores inmobiliarios te contacte.</p>


                  <div class="container " >
                        
                        <form class="" id="promocion-form"  method="POST"  action="" >
                           @csrf
                           <input type="hidden" name="formulario" id="formulario" value="formulario-home">
                          


                           <div class="form-row">
                              <div class="input-data">
                                 <input type="text" id="nombre" name="nombre" required>
                                 <div class="underline"></div>
                                 <label for="" >Nombres</label>
                              </div>
                              <div class="input-data">
                                 <input type="text" id="apellido" name="apellido" required>
                                 <div class="underline"></div>
                                 <label for="" >Apellidos</label>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="input-data">
                                 <input type="text" id="email" name="email" required>
                                 <div class="underline"></div>
                                 <label for="" >Correo</label>
                              </div>
                              <div class="input-data">
                                 <input type="text" id="movil" name="movil" required>
                                 <div class="underline"></div>
                                 <label for="">Celular</label>
                              </div>


                           </div>

                            <div class="form-row">
                                 <div class="input-data textarea">
                                    <textarea rows="8" cols="80" id="mensaje" name="mensaje" required></textarea>
                                    <br />
                                    <div class="underline"></div>
                                    <label for="" >Dejanos un mensaje</label>

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


                              <div class="form-row text-danger  px-4  py-4" style="margin-top:40px">
                                  
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




<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">  <img src="{{asset('nuevaweb_assets/assets/img/logo-color.svg')}}" alt="logo-robles">&emsp;&emsp;COMUNICADO IMPORTANTE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Mediante la presente comunicación hacemos de conocimiento público que ha venido circulando una
información publicitaria engañosa (flyer), la cual no ha sido elaborada ni publicitada por nuestra empresa.<br><br>
En dicha publicidad engañosa (la cual se adjunta), se viene dando información falsa sobre la venta de 200
lotes en un futuro proyecto inmobiliario, proyecto que no forma parte de nuestra cartera de productos.
Adicionalmente, se viene haciendo uso no permitido de nuestro logo, página web, correo y números de
contacto.<br><br>
A través de este comunicado denunciamos y desmentimos esta falsa información, ya que nuestra empresa
no viene publicitando ningún proyecto inmobiliario en el distrito de Santa María del Mar, y en caso de
hacerlo, no lo haríamos con la intención de afectar el desarrollo urbano y/o paisajístico de dicho distrito;
Ya que como se pude apreciar en nuestra página web, los proyectos que desarrollamos se caracterizan
por mantener y realzar la naturaleza.<br><br>
Agradecemos se haga caso omiso a dicha publicidad, además de tener en cuenta que todos los proyectos
que desarrollamos y la información de los mismos se encuentran en nuestra página web:
<a href="https://gruporobles.com.pe/" target="_blank">https://gruporobles.com.pe/</a>

<br><br>

Atentamente <br>
Grupo Robles y Yasikov <br><br>
<div class="w-100 d-flex justify-content-lg-end">Lima 03 de abril del 2024</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
       
      </div>
    </div>
  </div>
</div> -->



<!-- <div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xs"> 
    <div class="modal-content border-0"> 
      <div class="modal-body p-0"> 
        <a href="https://gruporobles.com.pe/eventos/robles-tours?utm_source=web&utm_medium=organic&utm_campaign=organic_campaign_web&utm_content=organic_campaign_web&utm_term=organic_campaign_web_pop_ad" target="_blank"><img src="{{asset('assets/img/popup_abril.webp')}}" class="img-fluid" alt="popup"> </a>
        
      </div>
    </div>
  </div>
</div> -->

@endsection




@section('js')
<!-- <script type="text/javascript">
  

 window.addEventListener('DOMContentLoaded', (event) => {
      var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
      myModal.show();
    });

</script> -->


<script type="text/javascript">
  

 window.addEventListener('DOMContentLoaded', (event) => {
    //var firstModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    var secondModal = new bootstrap.Modal(document.getElementById('secondModal'));

    //firstModal.show();

    secondModal.show();
    // firstModal._element.addEventListener('hidden.bs.modal', function () {
    //     secondModal.show();
    // });
});

</script> 


<script type="module" src="{{asset('nuevaweb_assets/js/mainWeb.js')}}"></script>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

    const swiper = new Swiper('.swiperProyectos', {
      // Optional parameters
      autoplay: {
        delay: 4000,
      },
      loop: true,
      spaceBetween: 30,
      slidesPerView: 1,
      // Navigation arrows
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

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
      }
    });

    const swiperNoticias = new Swiper('.swiper-noticias', {
      // Optional parameters
      loop: true,
      spaceBetween: 10,
      slidesPerView: 1,
      // Navigation arrows
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
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
          slidesPerView: 2,
        }
      }
    });



    var swiperBanner = new Swiper(".mySwiperBanner", {
      slidesPerView: 1,
       loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
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
                    window.location.href = url_final;
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





@endsection
