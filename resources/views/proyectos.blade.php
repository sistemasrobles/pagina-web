@extends('master.master')


@section('css')
  
  
 <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/proyectos.css')}}">


 @endsection


@section('content')
  <div class="loading-container">
    <div class="loading-gif"></div>
</div>


 
    <div class="d-flex  justify-content-center align-items-center" style=" position: relative;">
                
               <img src="{{asset('nuevaweb_assets/assets/img/paisa.webp')}}" alt="Vista del paisaje de Oxapampa" class="w-100 img-fluid  d-none d-sm-block"  >
                <img src="{{asset('nuevaweb_assets/assets/img/valores.webp')}}" alt="Vista del paisaje de Oxapampa" class="w-100 img-fluid d-block d-sm-none"  >
                 <div class="container  d-flex justify-content-center justify-content-lg-start align-items-center  h-100 w-100 " style="position:absolute;top: 0;z-index: 1;">
                    <h1 class="text-center family-700-one text-white ">Proyectos</h1>
                    

                     

                </div>

                <div class="overlay-proyectos" style=" backdrop-filter: blur(0px);  background: rgba(0, 150, 139, 0.3);
background: linear-gradient(90deg, rgba(0, 150, 139, 0.3) 35%, rgba(0, 92, 83, 0.3) 100%);
"></div> 
                 
        </div>

    <section class="container-xl py-4 " style="">
        
        <!-- <h1 class="text-center family-700-one color-green-2">Proyectos</h1> -->
        <!--container  filtrado  -->
        <div class="shadow-filter-proyect" style="">
            <P class="d-flex mb-5 ">En &nbsp;<strong>Robles & Yasikov</strong> &nbsp; contamos con más de 8 &nbsp;<strong> proyectos inmobiliarios </strong> &nbsp;a lo largo de la costa, sierra y selva del Perú.  Conoce más sobre ellos a continuación.
</P>
            <div class="row row-cols-1  row-cols--xl-3 row-cols-lg-3 row-cols-md-2 g-4 align-items-center">
                <label class="d-flex flex-column gap-1 border-lg-end px-4 ">
                    <strong class="color-green-2">¿Qué ubicación estás buscando?</strong>
                    <div class="d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-location-dot "></i>
                        <select id="proyecto" name="proyecto" class="form-select raleway-medium" aria-label="Default select example">
                            <option selected value="">
                                <Open>Seleccionar
                            </option>
                            <option value="Oxapampa">Oxapampa</option>
                            <option value="Ayacucho">Ayacucho</option>
                            <option value="Chanchamayo">Chanchamayo</option>
                             <option value="La Libertad">La Libertad</option>
                             <option value="Piura">Piura</option>
                        </select>
                    </div>
                </label>
                <label class="d-flex flex-column gap-1 border-lg-end px-4 ">
                    <strong class="color-green-2">Tipo de propiedad</strong>
                    <div class="d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-house-flag"></i>
                        <select id="typeProyect" name="departamento" class="form-select raleway-medium" aria-label="Default select example">
                            <option selected value="">
                                <Open>Seleccionar
                            </option>
                             <option value="">Lotes</option>
                            <option value="Cabaña">Cabañas</option> 
                           
                           
                        </select>
                    </div>
                </label>
                <div class="px-5">
                    <button id="buscar-proyecto" class="btn d-flex gap-3 align-items-center justify-content-center bg-terce text-white w-100">
                        Buscar <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                  
                </div>
            </div>
        </div>

        <!-- proyectos container grid -->
        <section class="container-xl py-4 ">
            <div id="container-proyect-filter" class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2  row-cols-sm-2 g-4">
               <!-- renderizar proyecto dinamicos -->
            </div>
        </section>
    </section>
@endsection

@section('js')



<script type="module" src="{{asset('nuevaweb_assets/js/proyectos.js')}}"></script>

<script type="text/javascript">
    document.getElementById("buscar-proyecto").addEventListener("click", function() {
    var loadingContainer = document.querySelector(".loading-container");
    loadingContainer.style.display = "flex"; 
    loadingContainer.style.visibility = "visible";



    
    setTimeout(function() {
        loadingContainer.style.display = "none";
        loadingContainer.style.visibility = "hidden";
    }, 400);
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

