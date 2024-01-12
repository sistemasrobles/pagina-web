@extends('master.master')

@section('css')


 <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/blog.css')}}">


 

@endsection

@section('content')


    <div class="d-flex  justify-content-center align-items-center" style=" position: relative;">
                
                 <img src="{{asset('nuevaweb_assets/assets/img/paisa.webp')}}" class="w-100 img-fluid  d-none d-sm-block"  >
                <img src="{{asset('nuevaweb_assets/assets/img/valores.webp')}}" class="w-100 img-fluid d-block d-sm-none"  >
                 <div class="container  d-flex justify-content-center justify-content-lg-start align-items-center  h-100 w-100" style="position:absolute;top: 0;z-index: 1;">
                    <h1 class="text-center family-700-one text-white">Blog</h1>

                     

                </div>

                <div class="overlay-proyectos" style=" backdrop-filter: blur(0px);  background: rgba(0, 150, 139, 0.3);
background: linear-gradient(90deg, rgba(0, 150, 139, 0.3) 35%, rgba(0, 92, 83, 0.3) 100%);
"></div> 
                 
        </div>

    <article class="container-xxl container-xl mt-4">
       

        <section class="pt-1 pb-5">
            <div class="d-flex justify-content-between py-3">
                <h2 class="color-green-2">Noticias Relacionadas</h2>
                
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 g-4">
                
                  @foreach ($blog as $list)
                 <div class="d-flex  align-items-center   gap-3 flex-column">
                  <div class="overflow-hidden container-img-block h-100"><img class="img-blog rounded-0 "  src="/storage/blog/{{$list->img}}"  alt=""></div>
                  <div class="d-flex gap-1 flex-column ">
                  <blockquote class="mb-0 text-gris">{{$list->publicacion}}</blockquote>
                  <h5 class="mb-0 family-700-one color-green-2">{{$list->titulo}}</h5>
                  <span class="mb-0 mt-3 text-dark">{{$list->descripcion_min}}</span>
                <a href="detalle_blog/{{$list->slug}}" type="button" class="btn bg-terce text-white px-4 raleway-medium mt-2">Ver mas</a>
                  </div>
              </div>

              @endforeach

            </div>
        </section>

    </article>

@endsection


@section('js')

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
