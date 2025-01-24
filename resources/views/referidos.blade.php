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



.whatsapp-button {
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  background-color: #25D366; /* Color oficial de WhatsApp */
  color: white;
  font-size: 16px;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 50px; /* Bordes redondeados */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra */
  transition: transform 0.2s, background-color 0.2s;
}

.whatsapp-button:hover {
 color:white;
}

.whatsapp-icon {
  width: 20px;
  height: 20px;
  margin-right: 10px; /* Espacio entre ícono y texto */
}

    </style>
@endsection


@section('content')



   



   
    <div class="d-flex  justify-content-center align-items-center" style=" position: relative;">
                
                 <img src="https://gruporobles.com.pe/storage/banners/refiere-3.jpg" class="w-100 img-fluid  d-none d-sm-block"  >
                <img src="https://gruporobles.com.pe/storage/banners/referidos_m.jpg" class="w-100 img-fluid d-block d-sm-none"  >
                

                
                 
        </div>

   


       

 

    <!-- section futurista valores -->
   
    <!-- preguntas -->
   




    <section class="container-fluid py-2 mb-4">
        <div class="container-xl">
            <div class="row  row-cols-xl-1 row-cols-lg-1 g-4">
                

                <div class="col col-lg-6">
                     
                </div>


                <div class="col-12 col-lg-6">
                     <a href="https://wa.me/1234567890" target="_blank" class="whatsapp-button">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-icon">
                      Escríbenos en WhatsApp
                    </a>
                </div>
             
                <div class="order-md-first order-xl-last order-lg-last d-flex flex-column justify-content-between align-items-start">
                    <h3 style="font-weight: 700;" class="family-700-one color-green-2 mt-5 mb-5">Términos y Condiciones
                       
                    </h3>
                        
                        <p>
                            Es muy sencillo. Solo sigue estos pasos para empezar a ganar recompensas:<br> 


</p>                    
                        <ul>
                            <li>
                        Comparte tu enlace de referido: Regístrate en nuestro programa de referidos y obtén tu enlace único para compartir con amigos, familiares y colegas. </li>

                        <li>
                        Invita a tus amigos: Envía tu enlace de referido a las personas que creas que estarían interesadas en nuestros proyectos. ¡No hay límites! Puedes invitar a tantas personas como quieras. </li>

                        <li>

                        Gana recompensas: Cada vez que uno de tus referidos complete una acción (compra y/o registro.), recibirás una recompensa. Cuantos más familiares o amigos invites, ¡ganas más!  </li>
                    
                        </ul>

                     <div class="container-resort w-100 ">
                        

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingOne">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                      ¿Cuántos referidos puedo invitar? 

                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">No hay un límite de referidos. ¡Cuantos más invites, más recompensas puedes ganar!</div>
                                </div>
                            </div>



                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingOnex">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOne">
                                      ¿Qué tipo de recompensas puedo ganar?
                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseOnex" class="accordion-collapse collapse" aria-labelledby="flush-headingOnex" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Dependiendo de nuestro programa, podrás ganar descuentos, productos gratuitos o dinero. Verifica en tu cuenta los detalles específicos de las recompensas disponibles</div>
                                </div>
                            </div>




                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingTwo">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                      ¿Cómo sé si mi referido completó una acción? 

                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Recibirás una notificación por correo electrónico o podrás verificar el estado de tus referidos directamente desde tu cuenta.</div>
                                </div>
                            </div>

                            <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingThree">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       ¿El programa de referidos tiene alguna restricción?
                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Para evitar abusos, el programa de referidos puede tener ciertas reglas. Por favor, revisa los términos y condiciones antes de comenzar. (No colocarlo, pero sería bueno elaborar unos términos y condiciones) </div>
                                </div>
                            </div>

                              <div style="background: none;" class="accordion-item">
                                <p class="accordion-header" id="flush-headingThreey">
                                    <button style="background: none;" class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       ¿Qué pasa si no usé todo mi saldo antes del vencimiento de la tarjeta?
                                    </button>
                                </p>
                                <div style="background: none;" id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThreey" data-bs-parent="#accordionFlushExample">
                                    <div style="background: none;" class="accordion-body bg-none">Lamentablemente no podrá recuperar ese saldo debido a que ya salió de nuestras cuentas y por políticas de nuestro proveedor no permite la reposición de saldo.
                                    </div>
                                </div>
                            </div>




                            


                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

    </section>




  


    
  


@endsection


@section('js')






<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


@endsection
