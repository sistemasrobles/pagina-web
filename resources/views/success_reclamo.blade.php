@extends('master.master')

@section('content')

<section style="height: 70vh;" class="d-flex justify-content-center align-items-center flex-column ">
    
    <h6 style="font-size:2rem" class="color-green-2">Libro de Reclamaciones</h6>

    
    <p class="mt-3 text-center">* El proveedor debe dar respuesta al reclamo o queja en un plazo no mayor a quince (15) días hábiles, el cual es improrrogable.</p>


    <span class="text-center mt-5" style="font-weight:500">
        ¿Necesitas ayuda en línea?<br>

Contáctanos al teléfono: (+51) 955 162 610 para ayudarte.<br>

Horario de atención: De lunes a viernes de 9:00 am a 6:00 pm y sábados de 9:00 am a 1:00 pm.
    </span>
    <a href="{{url('/')}}"class="btn bg-terce text-white mt-5">Regresar al Inicio <i class="fa-solid fa-home mx-2"></i></a>
</section>
@endsection