<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="Terrenos en Oxapampa de Robles & Yasikov. Regístrate y descubre las mejores ofertas y promociones en terrenos y cabañas." />

        <meta name="author" content="Robles & Yasikov" />

        <meta name="keywords" content="terrenos,cabañas,inmobiliaria,proyectos,terrenos,casas,oxapampa">


        <meta property="og:url" content="https://gruporobles.com.pe/nuestros-proyectos" />

        <meta property="og:title" content="Terrenos en Oxapampa Perú ¡En Robles & Yasikov!" />
        <meta property="og:description" content="Terrenos en Oxapampa de Robles & Yasikov. Regístrate y descubre las mejores ofertas y promociones en terrenos y cabañas." />



        <title>Nuestros Eventos | Robles & Yasikov</title>






  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/font.css')}}">

   <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="/img/icons/ico.ico">
  <!-- Theme CSS -->
  <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>

  <style type="text/css">

      main {
            position: relative;

            min-height: auto;

        }
   
       





.form-control:focus {
    box-shadow:  0 0 0 0.15rem rgba(0, 92, 83, 0.25) !important;
    border : 1px solid var(--color-primary-oscuro) !important;
}

.form-control {
   
    padding: 10px 10px;
    border : 1px solid var(--color-primary-oscuro);
    margin:10px 0px;
}

.form-control::placeholder {
    color: var(--color-primary-oscuro);
    font-size: 12px;
}



 select{
 font-size: 11px !important; 

        }
        select option {
            font-size: 11px !important; 
             color :var(--color-primary-oscuro) !important;
        }





            .video-container {
              position: relative;
              padding-bottom: 56.25%; 
              height: 0;
            }

            .video-container iframe {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              
            }




               .top-head {
               

                background-image: url('{{asset("assets/img/robles-tours-portada-landing.webp")}}'); 
                background-size: cover;
               
                background-position: center; 
              }


               @media (max-width: 992px) {

                  .top-head {
                    
                     background: #fff;
                  }


              
            }



            .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
      </style>




  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-250386817-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-250386817-1');
</script>

        <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '841134490271081');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=841134490271081&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    
</head>

<body class="position-relative">

 <header  class="header position-sticky   top-0  container-fluid w-100  d-flex flex-column justify-content-between align-items-center " style="background:rgba(255,255,255,1)">

  <div class="container-xl d-flex   justify-content-between align-items-center index-header ">
    <img src="{{url('assets/img/logo-color.svg')}}" alt="logo-robles">
    <!-- btn hamburger -->
    <span type="button" id="btn-hamburger" class="d-xxl-none d-xl-none d-md-none d-sm-flex gap-3">
      Menu <i class="fa-solid fa-bars fs-2"></i>
    </span>
    <!-- navegacion pc -->
    <nav class="d-xxl-flex d-xl-flex d-md-flex  d-none  justify-content-center align-items-center gap-5">
      <ul class="list-header  list-group list-group-horizontal-xl  list-group-horizontal-md list-group-horizontal-xxl ">
        <li><a  href="#" class="text-dark">Inicio</a></li>
        <li><a   href="{{url('/nosotros')}}" class="text-dark">Nosotros</a></li>
        <li id="view-propiedades" class="view-propiedades"><a   href="{{url('/proyectos')}}" class="text-dark">Proyectos</a></li>
       


      </ul>
      <a  href="{{url('/contactanos')}}" style="text-decoration: none;color:black;" 
      type="button" class="btn raleway-bold py-2 btn-link 
      border border-1 border-dark bg-white ">Contáctanos</a>
    </nav>   
  </div> 

  <!-- mobil -->
  <nav id="list-navegacion-header"  class="list-header-movil position-absolute no-view flex-column justify-content-center w-100 px-5 py-4   gap-4">
      <ul class="list-header  gap-4 list-group list-group-horizontal-xl  list-group-horizontal-md list-group-horizontal-xxl ">
        <li><a class="text-dark fs-2" href="#">Inicio</a></li>
         <li><a class="text-dark fs-2" href="{{url('/nosotros')}}">Nosotros</a></li>
        <li><a class="text-dark fs-2"   href="{{url('/proyectos')}}">Proyectos </a></li>
         <li><a class="text-dark fs-2"   href="{{url('/contactanos')}}">Contáctanos </a></li>

      </ul>
      
    </nav>
  
</header>

  <!-- Main -->
  <img src="{{asset('assets/img/movil-robles-tours.webp')}}" class="w-100 img-fluid d-block d-lg-none" loading="lazy">
  <main class="main top-head "  >
   

    


    <div class="container-fluid  d-flex align-items-center justify-content-center "  style="z-index:3;position: absolute;top:0;left: 0;height: 100%;;">


      <div class="container  d-flex align-items-center justify-content-end "  >
          
          <div class="col-12 col-lg-7  p-5 d-none d-lg-block ">
            
          
          

          </div>
          <div class="col-12 col-lg-5  text-dark  p-4 "  style="background: white;">
            
               <h3 class="family-700-one color-green-2 contacto-span" style="padding:0px 20px">Confirma tu participación a nuestro gran evento en Oxapampa este 03 y 04 de Febrero</h3> 
                <p style="padding:0px 20px" class="mt-2 "><small>Déjanos tus datos y un asesor se contactará contigo.</small></p>


                  <div class="container" >
                        
                        <form  class="" id="promocion-form" method="POST" action="{{ route('/promociones/registrar') }}"  >
                           
                             @csrf
                           <div class="form-row">
                              


                              <input type="hidden" name="mensaje" id="mensaje" value="">
                        
                               <input type="hidden" name="formulario" id="formulario" value="robles-tour">
                               
                                <input type="hidden" name="horario" id="horario" value="">

                             <div class="row " >

                                <div class="col-6">

                                  <input type="text" class=" form-control" id="nombre" name="nombre" placeholder="*Nombres" >
                                  
                                </div>

                                <div class="col-6">

                                   <input type="text" class=" form-control" id="apellido" name="apellido" placeholder="*Apellidos">
                                  
                                </div>





                            </div>


                             <div class="row " >

                                <div class="col-6">

                                  <input type="text" class="form-control" id="email" name="email" placeholder="*Correo">
                                

                                </div>

                                <div class="col-6">

                                  <input type="text" class="form-control" name="movil" id="movil"  placeholder="*Celular">
                                  

                                </div>

                                

                            </div>


                            <div class="row " >

                                <div class="col">

                                  <select class="form-control  js-example-basic-single" id="proyecto" name="proyecto">

                                      <option value="">Elige proyecto</option>



                                         @php
                                          
                                          
                                          $condicion = config('sperant.getIdProject'); 

                                      @endphp


                                      
                                        @foreach($projects as $list)

                                        <option value="{{ $condicion ? $list->id_sperant : $list->idproyecto }}">
                                         Lotes en {{$list->region}} - {{$list->descripcion}}
                                        </option>

                                      @endforeach
                                      
                                  </select>

                                

                                </div>

                               

                                

                            </div>







                           </div>

                           

                           <div class="form-row">

                            <small class="text-center">Al enviar este formulario estás aceptando nuestros <a target="_blank" href="{{url('/terminos')}}" class="color-green-2" style="text-decoration:underline;">términos y condiciones</a> y <a target="_blank"  href="{{url('/politicas')}}" class="color-green-2" style="text-decoration:underline;">las políticas de protección de datos.</a> </small>

                                

                                <input class="" type="hidden" value="1" id="tratamiento" name="tratamiento" >
                                <input class="" type="hidden" value="1" id="terminos" name="terminos" >

                              </div>


                              <div class="text-danger">
                                  
                                 <span id="errores" style="font-size:11px">
                                   
                                 </span>
                              </div>

                              <div class="form-row mt-4">


                                <div class="input-data textarea">


                                       <button  type="submit" id="btn-enviar-promo"  class="w-100 btn raleway-bold py-2 bg-terce text-white">Confirmar</button>

                                </div>

                              </div>
                                
                            </form>
                        </div>



      </div>

      </div>
    
      

       
    </div>

     
     

   

      <!-- <img src="{{asset('assets/img/nuestros-proy-dek.webp')}}" class="w-100 img-fluid">  -->


  </main> 







 
  <section class="container-xl pt-3 " >

    
    <div class="row  d-flex justify-content-center align-items-center py-3  ">
      
      <div class="col-12 col-lg-12 ">
         <h1 class="text-left  title-proyect family-700-one margin-0" >¿Qué es el Robles Tours edición Oxapampa?</h1>
         <p class="mt-3">Es un evento donde te llevaremos a visitar nuestro proyecto totalmente gratis desde la plaza de armas de Oxapampa
y donde vivirás una experiencia inolvidable con nuestra familia Robles & Yasikov.</p>
      </div>

   
    </div>
   

  
          
         

   
  
  </section>

   <section class="container">
    
     <div class="text-center  video-container">
                
                             <iframe loading="lazy" width="100%" height="500" src="https://www.youtube.com/embed/sRE8E7tvX1Q?autoplay=1" frameborder="0" allowfullscreen></iframe> 
                        </div>   
  </section> 


  <section class="container">
    
     <div class="row  d-flex justify-content-center align-items-center py-3  ">
      
      <div class="col-12 col-lg-12 my-3">

         <h2 class="text-left  title-proyect family-700-one margin-0" >Recuerda que </h2>
         

      </div>


       <div class="col-12 col-sm-6 col-lg-3 ">

        <div class="bg-white p-5 text-center">
           

            <img src="{{asset('assets/img/icon-oxa1.svg')}}" height="150" width="150" class="rounded-circle bg bg-terce">
           <p class="text-dark mt-3">El encuentro es en la plaza principal de Oxapampa.</p>

        </div>
         
         
         
      </div>

         <div class="col-12 col-sm-6 col-lg-3 ">

            <div class="bg-white p-5 text-center">
              

              
             <img src="{{asset('assets/img/icon-oxa5.svg')}}" height="150" width="150" class="rounded-circle bg bg-terce">
           <p class="text-dark mt-3">El evento se realizará este 03 y 04 de Febrero.</p>

            </div>

          
         
         
      </div>

         <div class="col-12 col-sm-6 col-lg-3  ">

            <div class="bg-white p-5 text-center">
              
            
             <img src="{{asset('assets/img/icon-oxa3.svg')}}" height="150" width="150" class="rounded-circle bg bg-terce">
             <p class="text-dark mt-3">La movilidad será completamente gratis</p>

            </div>
        
         
         
      </div>

         <div class="col-12 col-sm-6 col-lg-3 ">

          <div class="bg-white p-5 text-center">
            
             <img src="{{asset('assets/img/icon-oxa2.svg')}}" height="150" width="150" class="rounded-circle bg bg-terce">
           <p class="text-dark mt-3">Descuentos exclusivos por asistir a nuestro evento.</p>

          </div>
          
         
         
      </div>


   
    </div>


  </section>

  <section class="container mb-5 mt-4">
    


    <div class="row  d-flex justify-content-center align-items-center py-3  ">
      
      <div class="col-12 col-lg-12 ">
         <h2 class="text-left  title-proyect family-700-one margin-0" >Nuestros Participantes</h2>
         <p class="mt-3">Estos son nuestros clientes que participaron de nuestro evento "Robles Tours" y ya son parte de la familia Robles & Yasikov.</p>
      </div>

   
    </div>




     <div class="swiper mySwiperText">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{asset('assets/img/BELLA-1.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset('assets/img/BELLA-2.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
       <img src="{{asset('assets/img/BELLA-3.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset('assets/img/BELLA-4.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset('assets/img/BELLA-5.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset('assets/img/BELLA-6.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset('assets/img/FUNDO-1.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset('assets/img/FUNDO-2.webp')}}"  loading="lazy" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset('assets/img/FUNDO-3.webp')}}"  loading="lazy" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </section>




  


    

    



 

  <footer class="cotainer-fluid position-relative " >
  <div class="container-xl  text-white mb-5">
    <!-- grid footer -->
    <div class="row row-cols-xl-3 row-cols-lg-1 row-cols-md-1 g-5 justify-content-xl-between justify-content-lg-center ">
      <!-- contactanos -->
      <div style="width: max-content;"  class="container-contact px-5">
        <h4 class="mb-4">Contáctanos</h4>
        <div class="d-flex gap-4 flex-column">
          <span class="d-flex gap-2  align-items-center"><i class="fa-solid fa-phone"></i> +51 955 162 610</span>
          <span class="d-flex gap-2 align-items-center"><i class="fa-regular fa-envelope"></i>ventas@gruporobles.com.pe</span>
        </div>
      </div>
      <!-- Descubre más  -->
      <div style="width: max-content;" class="descubreMas px-5">
        <h4>Descubre más</h4>
        <div class="d-flex gap-3">
          <ul class="d-flex flex-column gap-2">
            <li class="py-1"><a href="{{url('/eventos/robles-tours')}}">Inicio</a></li>
            <li class="py-1"><a href="{{url('/nosotros')}}"> Quienes Somos</a></li>
            
            <li class="py-1"><a href="{{url('/politicas')}}">Politica y privacidad</a></li>
          </ul>
          <ul class="d-flex flex-column gap-2 ">
            <li class="py-1"><a href="{{url('/proyectos')}}"> Proyectos</a></li>
           
            <li class="py-1"><a href="{{url('/terminos')}}">Terminos y condiciones</a></li>
            <li class="py-1"><a href="#">Libro de reclamaciones</a></li>
          </ul>


        </div>
      </div>
      <!-- siguenos -->
      <div style="width: max-content;" class="siguenos-footer px-5 justify-self-lg-center" >
        <h4>Siguenos</h4>
        <div class="d-flex gap-4 flex-wrap">
        <a href="https://www.facebook.com/RoblesYasikov" target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span></a>
        <a href="https://www.youtube.com/@roblesyyasikov" target="_blank"><span><i class="fa-brands fa-youtube"></i></span></a>
        <a href="https://www.instagram.com/roblesyyasikov/?utm_source=P%C3%A1gina%20web&utm_medium=P%C3%A1gina%20web&utm_campaign=P%C3%A1gina%20web" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a>
        <a href="https://www.linkedin.com/company/grupo-robles-y-yasikov/" target="_blank"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
        <a href="https://www.tiktok.com/@roblesyyasikov" target="_blank"><span><i class="fa-brands fa-tiktok"></i></span></a>
        </div>
      </div>
    </div>

  </div>
  <section class="copyright text-white py-4 ">
     <div class="container-xl d-flex justify-content-center">
     <span>Copyright© 2023 - Robles & Yasikov. Todos los derechos reservados.</span>
     
     </div>
    </section>
</footer>


  



    <script src="{{asset('nuevaweb_assets/js/hamburger.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  




  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiperText", {
      effect: "coverflow",
       loop: true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

 <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

  
<script src="{{ asset('sweetalert2/sweetalert2.all.min.js') }}"></script>
  


 <script>

     var token_="{{ csrf_token() }}";
     var assetUrl = "{{ url('promociones/registrar') }}";
</script>

<script type="text/javascript">
  $("#btn-enviar-promo").on('click',(event)=>{

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
        'success': function(response){
         
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
                    window.location.href = "/eventos/robles-tours/gracias";
                  }, 3000); 

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


</script>
</body>

</html>