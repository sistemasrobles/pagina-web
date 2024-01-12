@extends('master.master')

@section('content')

<section style="height: 70vh;" class="d-flex justify-content-center align-items-center flex-column">
    
    <h1 style="font-size:6rem">404</h1>

    <p class="mt-3 text-center">Es posible que la página que está buscando se haya eliminado si se hubiera cambiado su nombre o no esté disponible temporalmente.</p>

    <a href="{{url('/')}}"class="btn bg-terce text-white mt-3">Regresar al Inicio <i class="fa-solid fa-home mx-2"></i></a>
</section>
@endsection