@extends('master.master')

@section('css')

<link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/contactanos.css')}}">

<link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/formulario.css')}}">

<style type="text/css">
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

@inject('telefono_footer', 'App\Http\Controllers\PoryectoController');
    <div class="d-flex  justify-content-center align-items-center bg-terce" style=" position: relative;">
                
                 <img src="{{asset('nuevaweb_assets/assets/img/paisa.webp')}}" class="w-100 img-fluid  d-none d-sm-block"  >
                <img src="{{asset('nuevaweb_assets/assets/img/valores.webp')}}" class="w-100 img-fluid d-block d-sm-none"  >
                 <div class="container  d-flex justify-content-center justify-content-lg-start align-items-center  h-100 w-100 " style="position:absolute;top: 0;z-index: 1;">
                    <h1 class="text-center family-700-one text-white">Contactanos</h1>

                     

                </div>

                <div class="overlay-proyectos" style=" backdrop-filter: blur(0px);  background: rgba(0, 150, 139, 0.3);
background: linear-gradient(90deg, rgba(0, 150, 139, 0.3) 35%, rgba(0, 92, 83, 0.3) 100%);
"></div> 
                 
        </div> 
    

  


       


     <section  class="container py-4 mb-5 mt-5">
    

    <div class="row d-flex justify-content-center align-items-center ">
      
      <div class="col-lg-6 text-left "  >


        <h2 class="family-700-one color-green-2  " >Estás a un paso de tu lote ideal</h2>
        <p class="mt-2">Grupo Robles & Yasikov te ofrece la oportunidad de hacer realidad tu sueño de tener tu propio lote. Nuestra amplia oferta de lotes te permitirá elegir el espacio perfecto para construir la casa de tus sueños.</p>
       <img src="https://www.elmueble.com/medio/2018/10/18/00461022_222c1bf0_2000x1332.jpg" alt="7 Años de Experiencia" class="img-fluid w-100 mt-1 ">  
        
        <p class="mt-3">Con años de experiencia en el mercado inmobiliario y un compromiso inquebrantable con la calidad y satisfacción del cliente, Grupo Robles & Yasikov te brinda asesoría personalizada durante todo el proceso de adquisición.</p>
        <h5 class="family-700-one color-green-2  my-3" >¡Estemos en contacto!</h5>

        <ul style="list-style: none;margin:0px;padding: 0px;">
            <li class="py-1"><i class="fa-solid fa-home me-2 color-green-2"></i>Edificio Capital Golf (Oficina 1801) - Av. Club Golf Los Incas 154 ; Santiago de Surco - Lima.</li>
             <li class="py-1"><i class="fa-solid fa-phone me-2 color-green-2"></i>(+51) 983 479 617 / 924 266 566 </li>
              <li class="py-1" ><a href="javascript:void(0)" class="color-green-2" style="text-decoration:underline;"><i class="fa-regular fa-envelope me-2 color-green-2"></i>ventas@gruporobles.com.pe</a></li>
        </ul>
      

        
      </div>






       <div class="col-12 col-lg-6 shadow pt-5 pb-2 pb-sm-0 mt-4 mt-lg-0 "  style="background:  #FBFBFB">
            
               <h5 class="family-700-one color-green-2 contacto-span" style="padding:0px 40px">¡Nosotros te contactamos! </h5>
                <p style="padding:0px 40px" class="mt-5 contacto-span">Completa el formulario y nosotros te contactaremos para darte todos los detalles.</p>


                  <div class="container " >
                        
                        <form class="" id="promocion-form"  method="POST"  action="" >
                           @csrf
                           <input type="hidden" name="formulario" id="formulario" value="formulario-contacto">
                          


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

                                      <div class="input-data d-none">
                                    
                                   

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



                          


                              <div class="form-row  ">


                                <div class="input-data textarea ">
                                      <small class="text-center">Al enviar este formulario estás aceptando nuestros <a target="_blank" href="{{url('/terminos')}}" class="color-green-2" style="text-decoration:underline;">términos y condiciones</a> y <a target="_blank"  href="{{url('/politicas')}}" class="color-green-2" style="text-decoration:underline;">las políticas de protección de datos.</a> </small>

                                       <button   type="button" id="btn-enviar-promo"  class="mt-4  w-100 btn raleway-bold py-2 bg-terce text-white">Solicitar Información</button>

                                        <a class="btn  w-100 mt-2 text-white " target="_blank"  href=" {{$telefono_footer->getPhoneProyect(0)}}"  style="background: #25D366;"><i class="fab fa-whatsapp me-2"></i> Contáctanos por Whatsapp.</a>

                                </div>

                              </div>


                              <div class="form-row text-danger   px-4  py-4 " style="margin-top:80px" >
                                  
                                 <span id="errores" style="font-size:12px" class="">
                                  
                                 </span>
                              </div>
                                
                            </form>
                        </div>



      </div>


    </div>
  </section>

   
<div class="loading-container">
    <div class="loading-gif"></div>
</div>
@endsection

@section('js')

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
