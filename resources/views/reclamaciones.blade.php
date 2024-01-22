@extends('master.master')

@section('css')

 <style type="text/css">
        p ,ul li{
            font-size: 15px;
            line-height: 29px;
            font-weight: 100;
        }

.btn-primary{

    background: var(--color-primary-oscuro) !important; 
    border: var(--color-primary-oscuro) !important;
    
  
}

.btn-primary:focus,.btn-primary:active{

    border: none !important;
     outline: 0 !important;
    box-shadow: none !important;
}
.form-control{
    font-size: 16px !important;
    padding-top: 20px !important;
}
input:focus ,textarea:focus{
      border-color: none !important;
    outline: 0 !important;
    box-shadow: none !important;
}

.form-control:focus {
  
    border-color: var(--color-primary-oscuro); 
    outline: 0;
    box-shadow: none !important;
}    

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {

  /*  opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}

a.disabled-link {
  pointer-events: none;
  cursor: default; /* Esto cambia el cursor a uno predeterminado para indicar que no es interactivo */
  text-decoration: none; /* Esto elimina el subrayado que indica un enlace */
  color: inherit; /* Esto mantiene el color del texto original */
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}


.form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    padding: 10px;
    color: #212529;
    background-color: #fff;
    background-image: url("../img/imgsf/arrow-down.png");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 16px;
    border-color: var(--color-primary-oscuro);
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.form-select:focus {
  
    border-color: var(--color-primary-oscuro);
    outline: 0;
    box-shadow: none;
}


 .loading-container {
        visibility: hidden;
    display: none ;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    z-index: 999;
    justify-content: center;
    align-items: center;
    display: flex;
}

.loading-gif {
    border: 4px solid #fff;
    border-top: 4px solid  var(--color-primary-oscuro);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
}


.form-check-input:checked {
    background-color:  var(--color-primary-oscuro);
     border-color:  var(--color-primary-oscuro);
}

    </style>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

@section('content')


<div class="container mt-5">

    <h3 class="text-left ">Libro de reclamaciones</h3>
    <p>Conforme a lo establecido con el código de protección y defensea del consumidor , esta institución cuenta con un libro de reclamaciones a su disposición</p>
    <p></p>
<div class="stepwizard ">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle disabled-link active-1">1</a>
            <p>Sobre la Empresa</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle active-2 disabled-link" disabled="disabled">2</a>
            <p>Identificación del Consumidor</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle active-3 disabled-link" disabled="disabled">3</a>
            <p>Identificación del Bien</p>
        </div>

        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle active-4 disabled-link" disabled="disabled">4</a>
            <p>Detalle de Reclamación</p>
        </div>
    </div>
</div>


 


<form role="form" id="reclamaciones-form" class="" method="POST" action="{{ route('/promociones/registrar') }}">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                

                 <div class="row">
                    <div class="col-lg-6 mt-3">
                         <label class="control-label">RUC:</label>
                        <input maxlength="100" type="text" readonly class="form-control mt-3" value="20607487767" id="ruc" name="ruc"/>
                    </div>



                    <div class="col-lg-6 mt-3">

                        <label class="control-label">RAZON SOCIAL:</label>
                        <input  maxlength="100" type="text" readonly class="form-control mt-3" value="GRUPO ROBLES & YASIKOV S.A.C"  id="razon" name="razon"/>
                    </div>


                       <div class="col-lg-12 mt-3">

                         <label class="control-label">DIRECCIÓN:</label>
                        <input maxlength="100" type="text" readonly class="form-control mt-3" value="Av. Circunvalación del Golf Los Incas #154" id="direccion" name="direccion"/>

                    </div>



                       <div class="col-lg-12 mt-3" >

                         <label class="control-label">PROYECTO<span class="text-danger">(*)</span>:</label>
                        
                        <select class="form-select raleway-medium mt-3" aria-label="" id="proyecto" name="proyecto" >
                            <option selected value="">
                                <Open>Seleccionar
                            </option>
                           
                            @foreach($projects as $list)

                                        <option value="{{$list->idproyecto}}">
                                           {{$list->descripcion}}
                                        </option>

                                      @endforeach


                        </select>

                        <span class="text-danger" id="error-proyecto"></span>


                    </div>


                </div>


               
               


                <button class="btn  nextBtn btn-lg my-5 text-white w-100 " type="button" style="background:var(--color-primary);"><strong><small>SIGUIENTE</small></strong></button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                

                <div class="row">
                    


                      



                       <div class="col-lg-6 mt-3" >

                         <label class="control-label">Tipo de Documento<span class="text-danger">(*)</span>:</label>
                        
                        <select class="form-select raleway-medium mt-3" aria-label="" id="tipo_documento" name="tipo_documento">
                            <option selected value="">
                                <Open>Seleccionar
                            </option>
                           
                            <option value="dni">DNI</option>
                            <option value="cex">Carnet de Extranjería</option>
                            <option value="pst">Pasaporte</option>
                            <option value="ots">Otro</option>


                        </select>

                        <span class="text-danger" id="error-tipo-documento"></span>


                    </div>

                     <div class="col-lg-6 mt-3">

                         <label class="control-label">#Documento<span class="text-danger">(*)</span>:</label>
                        <input maxlength="20" type="text"  class="form-control mt-3" value="" id="numero_documento" name="numero_documento"/>
                        <span class="text-danger" id="error-numero-documento"></span>
                    </div>


                    <div class="col-lg-4 mt-3">
                         <label class="control-label">Nombres<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="nombres" name="nombres"/>
                        <span class="text-danger" id="error-nombres"></span>
                    </div>



                    <div class="col-lg-4 mt-3">

                       <label class="control-label">Apellido Paterno<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="apepat" name="apepat"/>
                        <span class="text-danger" id="error-apepat"></span>
                    </div>

                     <div class="col-lg-4 mt-3">

                       <label class="control-label">Apellido Materno<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="apemat" name="apemat"/>
                        <span class="text-danger" id="error-apemat"></span>
                    </div>


                     <div class="col-lg-4 mt-3">

                       <label class="control-label">Celular<span class="text-danger">(*)</span>:</label>
                        <input maxlength="20" type="text"  class="form-control mt-3" value="" id="celular" name="celular"/>
                        <span class="text-danger" id="error-celular"></span>
                    </div>

                      <div class="col-lg-4 mt-3">

                       <label class="control-label">Teléfono Fijo:</label>
                        <input maxlength="20" type="text"  class="form-control mt-3" value="" id="fijo" name="fijo"/>
                        <span class="text-danger" id="error-fijo"></span>
                    </div>

                     <div class="col-lg-4 mt-3">

                       <label class="control-label">Email<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="email" name="email" autocomplete="off" />
                        <span class="text-danger" id="error-email"></span>
                    </div>

                      <div class="col-lg-4 mt-3">

                       <label class="control-label">Departamento<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="departamento" name="departamento"/>
                        <span class="text-danger" id="error-departamento"></span>
                    </div>

                      <div class="col-lg-4 mt-3">

                       <label class="control-label">Provincia<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="provincia" name="provincia"/>
                        <span class="text-danger" id="error-provincia"></span>
                    </div>

                     <div class="col-lg-4 mt-3">

                       <label class="control-label">Distrito<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="distrito" name="distrito"/>
                        <span class="text-danger" id="error-distrito"></span>
                    </div>

                     <div class="col-lg-12 mt-3">

                       <label class="control-label">Dirección<span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="direccion_cliente" name="direccion_cliente"/>
                        <span class="text-danger" id="error-direccion"></span>
                    </div>


                    <div class="col-lg-12 mt-3">
                        

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="checkapoderado" name="checkapoderado">
                            <label class="form-check-label" for="checkapoderado">Soy menor de edad</label>
                        </div>

                    </div>


                     <div class="col-lg-12 mt-3 d-none show-apoderado">

                       <label class="control-label">Nombre del apoderado <span class="text-danger">(*)</span>:</label>
                        <input maxlength="100" type="text"  class="form-control mt-3" value="" id="apoderado" name="apoderado"/>
                        <span class="text-danger" id="error-apoderado"></span>
                    </div>


                </div>

                

                <button class="btn  nextBtn btn-lg mt-5 text-white w-100" type="button" style="background:var(--color-primary);"><strong><small>SIGUIENTE</small></strong></button>
                
                <button id="go-step-1"  class="btn  btn-lg text-white w-100  mt-2 mb-5" type="button" style="background:#666666"><strong><small>ATRAS</small></strong></button>
               

            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                


                <div class="row">


                       <div class="col-lg-12 mt-3">

                       <label class="control-label">Monto Reclamado<span class="text-danger">(*)</span>:</label>
                        <input maxlength="10" type="text"  class="form-control mt-3" value="" id="monto_reclamado" name="monto_reclamado"/>
                        <span class="text-danger" id="error-monto"></span>
                    </div>


                    <div class="col-lg-12 mt-3">
                         <label class="control-label">Descripción<span class="text-danger">(*)</span>:</label>
                        <textarea maxlength="2000" type="text"  class="form-control mt-3" value="" id="bien" name="bien" style="height: 250px;resize: none;" /></textarea>

                        <span class="text-danger" id="error-identificacion-bien"></span>
                    </div>



                   


                      


                </div>



                  <button class="btn  nextBtn btn-lg mt-5 text-white w-100" type="button" style="background:var(--color-primary);"><strong><small>SIGUIENTE</small></strong></button>
                
                <button id="go-step-2"  class="btn  btn-lg text-white w-100  mt-2 mb-5" type="button" style="background:#666666"><strong><small>ATRAS</small></strong></button>


            </div>
        </div>
    </div>

    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                



                <div class="row">

                     <div class="col-lg-12 mt-3">
                       
                       <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="reclamo" checked>
          <label class="form-check-label" for="gridRadios1">
            <strong>Reclamo</strong> (Disconformidad relacionada a los productos y/o servicios)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="queja">
          <label class="form-check-label" for="gridRadios2">
            <strong>Queja</strong> (Disconformidad no relacionada a los productos y/o servicios . malestar o descontento respecto a la atencion al público)
          </label>
        </div>
                    </div>


                    <div class="col-lg-12 mt-3">
                         <label class="control-label">Descripción<span class="text-danger">(*)</span>:</label>
                        <textarea maxlength="2000" type="text"  class="form-control mt-3" value="" id="queja" name="queja" style="height: 250px;resize: none;" /></textarea>

                        <span class="text-danger" id="error-pedido-descripcion"></span>
                    </div>

                    <div class="col-lg-12 mt-3">
                         <label class="control-label">Pedido del Consumidor<span class="text-danger">(*)</span>:</label>
                        <textarea maxlength="2000" type="text"  class="form-control mt-3" value="" id="pedido" name="pedido" style="height: 250px;resize: none;" /></textarea>

                        <span class="text-danger" id="error-pedido-consumidor"></span>
                    </div>



                   


                      


                </div>



               

                <button id="envio-final" class="btn nextBtn btn-lg mt-5 text-white w-100" type="button" style="background:var(--color-primary-oscuro);"><strong><small>ENVIAR RECLAMO</small></strong></button>

                <button id="go-step-3" class="btn  btn-lg text-white w-100  mb-5 mt-2" type="button" style="background:#666666"><strong><small>ATRAS</small></strong></button>


                 <span id="errores" style="font-size:11px" class="text-danger">
                                   
                                 </span>


            </div>
        </div>
    </div>

</form>


 <div class="loading-container">
    <div class="loading-gif"></div>
</div>


</div>






@endsection

@section('js')

 <script>
    var assetUrl = "{{ url('reclamaciones/guardar') }}";
    var token_="{{ csrf_token() }}";
</script>


<script type="text/javascript">
    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();






    navListItems.click(function (e) {


        e.preventDefault();
         var $target = $($(this).attr('href')),
                $item = $(this);

                
        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            navListItems.removeClass('text-white').addClass('text-dark');

            $item.addClass('btn-primary');
            


           
            $item.addClass('text-white');
            


            allWells.hide();
            $target.show();
          
            $target.find('input:eq(0)').focus();
        }




    });



    

    $("#go-step-1").on('click',function(){

        $('div.setup-panel div a').removeClass('text-white').addClass('text-dark');
        $('.active-1').addClass('text-white');


        $('#step-2').hide();
        $('#step-1').show();
        $(".active-1").addClass('btn-primary');
        $(".active-2").removeClass('btn-primary');
    })




     $("#go-step-2").on('click',function(){

         $('div.setup-panel div a').removeClass('text-white').addClass('text-dark');
         $('.active-2').addClass('text-white');


        $('#step-3').hide();
        $('#step-2').show();
        $(".active-2").addClass('btn-primary');
        $(".active-3").removeClass('btn-primary');
    })



     $("#go-step-3").on('click',function(){

         $('div.setup-panel div a').removeClass('text-white').addClass('text-dark');
         $('.active-3').addClass('text-white');


        $('#step-4').hide();
        $('#step-3').show();
        $(".active-3").addClass('btn-primary');
        $(".active-4").removeClass('btn-primary');
    })


    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

            //valida inputs

            if(curStepBtn =='step-1'){

                let proyecto = $("#proyecto").val();

               


                if( proyecto == ""){


                     $("#error-proyecto").text('seleccione proyecto');

                     isValid = false;

                }else{

                     $("#error-proyecto").text('');

                }
            }

            
             if(curStepBtn =='step-2'){

                 let tipo_documento = $("#tipo_documento").val();
                 let numero_documento =   $("#numero_documento").val().trim();

                 let nombres =   $("#nombres").val().trim();
                 let apepat =   $("#apepat").val().trim();
                 let apemat =   $("#apemat").val().trim();

                 let celular =   $("#celular").val().trim();
                 let fijo =   $("#fijo").val().trim();
                 let email =   $("#email").val().trim();

                

                 let departamento =   $("#departamento").val().trim();
                 let provincia =   $("#provincia").val().trim();
                 let distrito =   $("#distrito").val().trim();
                 let direccion =   $("#direccion_cliente").val().trim();
                
                 let apoderado = $("#apoderado").val().trim();
                
                
                if( tipo_documento == ""){
                   

                     $("#error-tipo-documento").text('seleccione tipo de documento');

                     isValid = false;

                }else{
                     
                     $("#error-tipo-documento").text('');

                }


                 if( numero_documento == ""){
                   

                     $("#error-numero-documento").text('ingrese número de documento');

                     isValid = false;

                }else{
                     
                     $("#error-numero-documento").text('');

                }

                 if( nombres == ""){
                   

                     $("#error-nombres").text('ingrese nombres');

                     isValid = false;

                }else{
                     
                     $("#error-nombres").text('');

                }

                 if( apepat == ""){
                   

                     $("#error-apepat").text('ingrese apellido paterno');

                     isValid = false;

                }else{
                     
                     $("#error-apepat").text('');

                }



                 if( apemat == ""){
                   

                     $("#error-apemat").text('ingrese apellido materno');

                     isValid = false;

                }else{
                     
                     $("#error-apemat").text('');

                }


                  if( celular == ""){
                   

                     $("#error-celular").text('ingrese celular');

                     isValid = false;

                }else{
                     
                     $("#error-celular").text('');

                }


               


                 if( email == ""){
                   

                     $("#error-email").text('ingrese email');

                     isValid = false;

                }else{
                     
                     //valida correo

                     const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                     let boolean_email =  regexCorreo.test(email);

                     if(!boolean_email){

                        $("#error-email").text('ingrese un email válido');
                        isValid = false;

                     }else{
                        
                        $("#error-email").text('');
                     }
                     

                }



                 if( departamento == ""){
                   

                     $("#error-departamento").text('ingrese departamento');

                     isValid = false;

                }else{
                     
                     $("#error-departamento").text('');

                }


                 if( provincia == ""){
                   

                     $("#error-provincia").text('ingrese provincia');

                     isValid = false;

                }else{
                     
                     $("#error-provincia").text('');

                }


                  if( distrito == ""){
                   

                     $("#error-distrito").text('ingrese distrito');

                     isValid = false;

                }else{
                     
                     $("#error-distrito").text('');

                }

                 if( direccion == ""){
                   

                     $("#error-direccion").text('ingrese dirección');

                     isValid = false;

                }else{
                     
                     $("#error-direccion").text('');

                }


                let menor_de_edad = $("#checkapoderado").prop('checked');

                if(menor_de_edad){

                    if( apoderado == ""){
                   

                        $("#error-apoderado").text('ingrese nombre de apoderado');

                        isValid = false;

                    }else{
                     
                        $("#error-apoderado").text('');

                    }
                }
                

             }



             if(curStepBtn =='step-3'){

                let bien = $("#bien").val().trim();

               let monto_reclamado = $("#monto_reclamado").val();



                if( bien == ""){


                     $("#error-identificacion-bien").text('ingrese una descripción');

                     isValid = false;

                }else{

                     $("#error-identificacion-bien").text('');

                }


                 if( monto_reclamado == ""){


                     $("#error-monto").text('ingrese un monto ');

                     isValid = false;

                }else{

                     $("#error-monto").text('');

                }
            }




            if(curStepBtn =='step-4'){

                let queja = $("#queja").val().trim();

                let pedido = $("#pedido").val().trim();

               


                if( queja == ""){


                     $("#error-pedido-descripcion").text('ingrese una descripción');

                     isValid = false;

                }else{

                     $("#error-pedido-descripcion").text('');

                }


                 if( pedido == ""){


                     $("#error-pedido-consumidor").text('ingrese una descripción');

                     isValid = false;

                }else{

                     $("#error-pedido-consumidor").text('');

                }
            }


        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");

            }
        }

        if (isValid){
            nextStepWizard.removeAttr('disabled').trigger('click');

            if(curStepBtn =='step-4'){

                guardar_datos_formulario();
            }
            


        }
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});



function guardar_datos_formulario(){

 var loadingContainer = document.querySelector(".loading-container");


 let data =   new FormData($("#reclamaciones-form")[0])
    data.append( "_token",token_)
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

               

                $("#reclamaciones-form")[0].reset()


                  setTimeout(function() {
                    window.location.href = "/reclamaciones/success";
                  }, 500); 
                
                  

            }else{

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


}


</script>

<script>


    

    $("#checkapoderado").on('change',function(){

        let isChecked = $(this).prop('checked');

        if (isChecked) {
            
            $('.show-apoderado').removeClass('d-none');
            $('.show-apoderado').addClass('d-block');

        } else {
            
            $('.show-apoderado').removeClass('d-block');
            $('.show-apoderado').addClass('d-none');
            $("#apoderado").val('');
        }


    });



    $("#proyecto").on('change',function(){

        $("#error-proyecto").text('');

    });

    $("#tipo_documento").on('change',function(){

        $("#error-tipo-documento").text('');

    });


    

     $("#apoderado").on('input',function(){

        $("#error-apoderado").text('');

    });


     $("#numero_documento").on('input',function(){

        $("#error-numero-documento").text('');

    });

     $("#nombres").on('input',function(){

        $("#error-nombres").text('');

    });

      $("#apepat").on('input',function(){

        $("#error-apepat").text('');

    });

      $("#apemat").on('input',function(){

        $("#error-apemat").text('');

    });


      $("#celular").on('input',function(){

        $("#error-celular").text('');

    });

      $("#email").on('input',function(){

        $("#error-email").text('');

    });

      $("#departamento").on('input',function(){

        $("#error-departamento").text('');

    });

        $("#provincia").on('input',function(){

        $("#error-provincia").text('');

    });


    $("#distrito").on('input',function(){

        $("#error-distrito").text('');

    });

     $("#direccion_cliente").on('input',function(){

        $("#error-direccion").text('');

    });

     $("#bien").on('input',function(){

        $("#error-identificacion-bien").text('');

    });



      $("#queja").on('input',function(){

        $("#error-pedido-descripcion").text('');

    });


       $("#pedido").on('input',function(){

        $("#error-pedido-consumidor").text('');

    });


    $("#monto_reclamado").on('input',function(){

        $("#error-monto").text('');

    });



       document.getElementById('monto_reclamado').addEventListener('input', function(event) {
    
     

        
           let inputValue = event.target.value;

    
            let numericValue = inputValue.replace(/[^\d.]/g, '');

         
            numericValue = numericValue.replace(/^(\.\d*)\..*$/, '$1');
            numericValue = numericValue.replace(/(\.\d*)\..*$/, '$1');
            numericValue = numericValue.replace(/^(\d+\.\d{0,2}).*$/, '$1');

            event.target.value = numericValue;

    });


    document.getElementById('celular').addEventListener('input', function(event) {
    
      let inputValue = event.target.value;

      
      let numericValue = inputValue.replace(/\D/g, '');

     
      event.target.value = numericValue;
    });


    document.getElementById('fijo').addEventListener('input', function(event) {
    
      let inputValue = event.target.value;

      
      let numericValue = inputValue.replace(/\D/g, '');

     
      event.target.value = numericValue;
    });
  </script>
@endsection
