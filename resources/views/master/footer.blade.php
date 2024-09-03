<footer class="container-fluid position-relative " >
  <div class="container-xl  text-white pb-4">
    <!-- grid footer -->
    <div class="row row-cols-xl-3 row-cols-lg-1 row-cols-md-1 g-5 justify-content-xl-between justify-content-lg-center ">
      <!-- contactanos -->
      <div style="width: max-content;"  class="container-contact px-5">
        <h4 class="mb-4">Contáctanos</h4>
        <div class="d-flex gap-4 flex-column">
          <span class="d-flex gap-2  align-items-center"><i class="fa-solid fa-phone"></i> (+51) {{$telefono_footer->getPhoneProyect(1)}} / 924-266-566</span>
          <span class="d-flex gap-2 align-items-center"><i class="fa-regular fa-envelope"></i>ventas@gruporobles.com.pe</span>
        </div>
      </div>
      <!-- Descubre más  -->
      <div style="width: max-content;" class="descubreMas px-5">
        <h4>Descubre más</h4>
        <div class="d-flex gap-3">
          <ul class="d-flex flex-column gap-2">
            <li class="py-1"><a href="{{url('/')}}">Inicio</a></li>
            <li class="py-1"><a href="{{url('/nosotros')}}"> Quiénes Somos</a></li>
            <li class="py-1"><a href="{{url('/contactanos')}}">Contacto</a></li>
            <li class="py-1"><a href="{{url('/politicas')}}">Política y privacidad</a></li>
          </ul>
          <ul class="d-flex flex-column gap-2 ">
            <li class="py-1"><a href="{{url('/proyectos')}}"> Proyectos</a></li>
            <li class="py-1"><a href="{{url('/blog')}}"> Blog</a></li>
            <li class="py-1"><a href="{{url('/terminos')}}">Términos y condiciones</a></li>
            <li class="py-1"><a href="{{url('/reclamaciones')}}">Libro de reclamaciones</a></li>
          </ul>


        </div>
      </div>
      <!-- siguenos -->
      <div style="width: max-content;" class="siguenos-footer px-5 justify-self-lg-center" >
        <h4>Siguenos</h4>
        <div class="d-flex gap-4 flex-wrap">
        <a href="https://www.facebook.com/RoblesYasikov" target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span></a>
        <a href="https://www.youtube.com/@roblesyyasikov" target="_blank"><span><i class="fa-brands fa-youtube"></i></span></a>
        <a href="https://www.instagram.com/roblesyyasikov/" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a>
        <a href="https://www.linkedin.com/company/grupo-robles-y-yasikov/" target="_blank"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
        <a href="https://www.tiktok.com/@roblesyyasikov" target="_blank"><span><i class="fa-brands fa-tiktok"></i></span></a>
        </div>
      </div>
    </div>

  </div>
 
</footer>
 <section class=" copyright text-white py-4   w-100 " style="">
     <div class="container-fluid d-flex justify-content-center text-center">
     <small>Copyright© 2023 - Robles & Yasikov. Todos los derechos reservados.</small>
     
     </div>
    </section>