@extends('master.master')


@section('css')


 <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/detailsBlog.css')}}">

@endsection


@section('content')


<style type="text/css">
    .bg-main-detailsBlogs{


    height: 85vh;
    width: 100%;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
    url('/storage/blog/{{$blog->background}}')
     center center/cover no-repeat fixed;
}
</style>


    
    <main class="container-fluid bg-main-detailsBlogs d-flex justify-content-center align-items-center">
        <div class="container-xl w-75 text-white" >
            <h1 class="px-5 text-center">{{ $blog->titulo}}</h1>
            <p class="text-center">{{ $blog->publicacion}}</p>
        </div>
    </main>
    <!-- <h2 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima maiores dolorum, et dignissimos aperiam cupiditate eaque</h2> -->
    <section class="container-xl py-5 d-flex justify-content-center align-items-center flex-column">
        <div class="row">
            <div class="col-lg-9">
                

                {!! $blog->descripcion!!}

                
            </div>
            <div class="col-lg-3">
                <h2 class="mb-3 text-dark">Blogs destacados</h2>


                @foreach($blogs as $list)

                <div class="mb-4">
                    

                    <div class="d-flex  align-items-center   gap-3  flex-column" >
                        <div class="overflow-hidden container-img-block h-100"><img class="img-blog rounded-0 img-fluid "  src="/storage/blog/{{$list->img}}"  alt=""></div>
                        <div class="d-flex gap-1 flex-column ">
                        <blockquote class="mb-0 text-gris">{{$list->publicacion}}</blockquote>
                        <h5 class="mb-0 family-700-one color-green-2">{{$list->titulo}}</h5>
                        <span class="mb-0 mt-3 text-dark">{{$list->descripcion_min}}</span>
                        <a href="./{{$list->slug}}" type="button" class="btn bg-terce text-white px-4 raleway-medium mt-2">Ver mas</a>
                        </div>
                    </div>



                </div>
                @endforeach
                
               
               

            </div>
        </div>
    </section>

@endsection
@section('js')




@endsection
