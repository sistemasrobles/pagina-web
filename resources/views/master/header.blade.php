

<header  class="header position-sticky    top-0  container-fluid w-100  d-flex flex-column justify-content-between align-items-center " style="background:rgba(255,255,255,1)">

  <div class="container-xl d-flex   justify-content-between align-items-center index-header ">
    <a href="{{url('/')}}"><img src="{{asset('nuevaweb_assets/assets/img/logo-color.svg')}}" alt="Grupo Robles & Yasikov"></a>
    <!-- btn hamburger -->
    <span type="button" id="btn-hamburger" class="d-xxl-none d-xl-none d-md-none d-sm-flex gap-3">
       <i class="fa-solid fa-bars fs-2"></i>
    </span>
    <!-- navegacion pc -->
    <nav class="d-xxl-flex d-xl-flex d-md-flex  d-none  justify-content-center align-items-center gap-5">
      <ul class="list-header  list-group list-group-horizontal-xl  list-group-horizontal-md list-group-horizontal-xxl ">
        <li><a href="{{url('/')}}" class="text-dark ">Inicio</a></li>
        <li id="view-propiedades" class="view-propiedades "><a href="{{url('/proyectos')}}" class="text-dark">Proyectos <i class="fa-solid fa-angle-down"></i></a></li>
        <li><a href="{{url('/referidos')}}" class="text-dark " >Referidos</a></li>
        <li><a href="{{url('/nosotros')}}" class="text-dark " >Conócenos</a></li>
        <li><a href="{{url('/blog')}}" class="text-dark ">Blog</a></li>


      </ul>
      <a id="btn-header-contacto"href="{{url('/contactanos')}}" style="text-decoration: none;color:black;" 
      type="button" class="btn raleway-bold py-2 btn-link 
      border border-1 border-dark bg-white ">Contáctanos</a>
    </nav>   
  </div> 

  <!-- mobil -->
  <nav id="list-navegacion-header"  class="list-header-movil position-absolute no-view flex-column justify-content-center w-100 px-5 py-4   gap-4">
      <ul class="list-header-2  gap-4 list-group list-group-horizontal-xl  list-group-horizontal-md list-group-horizontal-xxl ">
        <li><a class="text-dark fs-2"href="{{url('/')}}">Inicio</a></li>
        <li><a class="text-dark fs-2" href="{{url('/proyectos')}}">Proyectos</a></li>
        <li><a class="text-dark fs-2" href="{{url('/referidos')}}">Referidos</a></li>
        <li><a class="text-dark fs-2" href="{{url('/nosotros')}}">Conócenos</a></li>
        <li><a class="text-dark fs-2" href="{{url('/blog')}}">Blog</a></li>
         <li><a class="text-dark fs-2" href="{{url('/contactanos')}}">Contáctanos</a></li>

      </ul>
      
    </nav>
  <!-- Modal proyectos -->

  <div class="bg-black-modal container-fluid">
   

 <div id="modal-header" class="container-xxl   container-modal bg-white">
    <div class="row row-cols-3  mb-2">
      <!-- one -->

        <div class="d-none">
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/fundo-los-pinos')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/pinos.webp')}}" alt="proyecto fundo los pinos">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 


            <!-- <img src="{{asset('nuevaweb_assets/assets/img/retama_blanco.png')}}" alt="" style="height:200px ;width: 200px;">  -->


          </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Oxapampa</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 200m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
               <h5 class=" py-3 border-bottom " style="font-weight:700">Fundo Los Pinos</h5>
            
          </div> 
       </div>






       <div class="">
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/fundo-los-alpes')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/bosque.webp')}}" alt="proyecto fundo el bosque">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 


            <!-- <img src="{{asset('nuevaweb_assets/assets/img/retama_blanco.png')}}" alt="" style="height:200px ;width: 200px;">  -->


          </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Oxapampa</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 300m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
               <h5 class=" py-3 border-bottom " style="font-weight:700">Fundo Los Alpes</h5>
            
          </div> 
       </div>

         <div>
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/fundo-los-robles')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/robles.webp')}}" alt="proyecto fundo los robles">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 


            <!-- <img src="{{asset('nuevaweb_assets/assets/img/retama_blanco.png')}}" alt="" style="height:200px ;width: 200px;">  -->


          </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Oxapampa</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 200m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
               <h5 class=" py-3 border-bottom " style="font-weight:700">Fundo Los Robles</h5>
            
          </div> 
       </div>


       <div>
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/el-arco-dorado')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/arco.webp')}}" alt="proyecto el arco dorado">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 


          </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Oxapampa</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 300m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
             
             <h5 class=" py-3 border-bottom " style="font-weight:700">El Arco Dorado</h5> 


          </div> 
       </div>
      
      
      <!-- dos -->
      <div class="d-none">
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/bella-primavera')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/bella.webp')}}" alt="proyecto bella primavera">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 

     

             </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Oxapampa</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 200m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
             
             
             <h5 class=" py-3 border-bottom " style="font-weight:700">Bella Primavera</h5> 
          </div> 
       </div>


      <!-- tres -->
     <div>
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/el-bosque-del-rey')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/bosque.webp')}}" alt="proyecto el bosque del rey">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 

         

          </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Oxapampa</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 300m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
             <h5 class=" py-3 border-bottom " style="font-weight:700">El Bosque del Rey</h5>
            
          </div> 
       </div>
      <!-- tres -->



       <div class="d-none">
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/fundo-valentina')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/fundo.webp')}}" alt="proyecto fundo valentina">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 

            


          </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Oxapampa</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 300m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
              <h5 class=" py-3 border-bottom " style="font-weight:700">Fundo Valentina</h5>
           
          </div> 
       </div>
      <!-- tres -->
      

      <div>
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/el-golf-de-poseidon')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/golf.webp')}}" alt="proyecto el golf de poseidon">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center">


            </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">La Libertad</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 180m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
             <h5 class=" py-3 border-bottom " style="font-weight:700">El Golf de Poseidón</h5>
           
          </div> 
       </div>

      <!-- tres -->
      <div>
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/la-retama')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/retama.webp')}}" alt="proyecto la retama">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 

      

             </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Ayacucho</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 300m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
              <h5 class=" py-3 border-bottom " style="font-weight:700">La Retama</h5>
           
          </div> 
       </div>
      <!-- tres -->
      

      <div>
         

         
      <div class="card-proyect-header position-relative d-flex flex-column gap-4 family-700-one   " >

       

  
       <a href="{{url('/proyectos/lotes/valle-orquidea')}}"> <div class="container-img-proyect position-relative " >
          <span class="info-absolute-card text-white position-absolute top-50 start-50 translate-middle px-4 py-3 border border-white text-center btn">Conocer más</span>
          <img src="{{asset('nuevaweb_assets/assets/img/proyectos/valle.webp')}}" alt="proyecto valle Orquídea">

        


          <div style="position:absolute;top:0;left: 0; background: rgba(0, 0, 0, 0.3);" class="w-100 h-100 d-flex justify-content-center align-items-center"> 


            <!-- <img src="{{asset('nuevaweb_assets/assets/img/retama_blanco.png')}}" alt="" style="height:200px ;width: 200px;">  -->


          </div>



           <div style="position:absolute;top:10px;right: 10px;" > <span class="text-white p-2  border btn"  style="font-size:14px">Chanchamayo</span> </div>


            <div style="position:absolute;bottom:0;left: 0; background: rgba(0, 92, 83, 0.7);" class="w-100 "> <span class="text-white p-2"  style="font-size:14px">Metrajes desde 300m<sup>2</sup></span> </div>


        </div> 




      </a>
       


      </div>

          <div class="col-12  ">
               <h5 class=" py-3 border-bottom" style="font-weight:700">Valle Orquídea</h5>
            
          </div> 
       </div>





      




         


    </div>
  </div>

  </div>



 
</header>