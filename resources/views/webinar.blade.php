<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./assets_landings/css/index.css" />
    <link rel="stylesheet" href="./assets_landings/css/font.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <!-- main landing -->
    <main class="container-fluid bg-main-img">
      <div
        class="container-xl container-lg container-md container-sm d-flex justify-content-end"
      >
        <form
          id="form-proyect"
          style="max-width: 480px"
          class="shadow d-flex gap-2 flex-column justify-content-center bg-white px-4 py-4 radius-section text-black"
        >
          <div class="mb-2">
            <h3 class="fs-5 mb-2 font-form color-primary submit">
              Impulsa Las Ventas De Tu Negocio
            </h3>
            <p class="mb-0 fs-8 ">
              Estás en el lugar correcto para aprender y lograrlo
            </p>
          </div>

          <!-- nombre y apellido -->
          <div class="d-flex flex-column gap-3 mb-2">
            <label class="form-control d-flex flex-column">
              <span class="fs-8">Nombre</span>
              <input
                id="basic_name"
                name="nombre"
                type="text"
                placeholder="Ejemplo: Juan Pérez"
              />
            </label>

            <label class="form-control d-flex flex-column">
              <span class="fs-8">Apellidos</span>
              <input
                id="basic_apellido"
                name="apellidos"
                type="text"
                placeholder="Ejemplo: Sanchez Montes"
              />
            </label>
          </div>
          <div class="d-flex flex-column gap-3">
            <!-- telefono -->
            <label class="form-control d-flex flex-column">
              <span class="fs-8">Telefono</span>
              <input
                id="basic_telefono"
                name="telefono"
                size="10"
                type="text"
                placeholder="999 999 999"
              />
            </label>

            <!-- Gmail form -->
            <label class="form-control d-flex flex-column">
              <span class="fs-8">Email</span>
              <input
                autocomplete="off"
                type="email"
                id="email"
                name="email"
                placeholder="Ingresa tu email"
              />
            </label>
          </div>

        <p class="font-raleway-medium fs-8 color-plomo mt-3">
              Al enviar este formulario estás aceptando nuestros <a href="#" class="color-primary no-hover">términos y condiciones</a> y las <a href="#" class="color-primary no-hover">políticas de protección de datos</a>.
            </p>
          <span
            class="form-participacion w-100 d-flex justify-content-center align-items-center"
          >
            <button>
              <div class="svg-wrapper-1">
                <div class="svg-wrapper">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                  >
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                      fill="currentColor"
                      d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                    ></path>
                  </svg>
                </div>
              </div>
              <span class="submit">Enviar Datos</span>
            </button>
          </span>
        </form>
      </div>
    </main>

    <!-- section impulsar ventar -->
    <section class="container-xl container-lg container-md container-sm ">
      <!-- grid -->
      <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center " style="position:relative;">
        <div class="py-5">
          <div class="d-flex flex-column gap-3 bg-white p-3 radius-section">
            <h1 class="color-primary out-Extrabold mb-0">
              <u>Impulsa Las Ventas De Tu Negocio</u>
            </h1>
            <p class="out-normal">
              Si algo he aprendido en mi caso de emprendedora a CEO es que el
              éxito o fracaso de un negocio <b>online radica</b> en la capacidad
              de trazar la <b>estrategia</b> de marketing digital que mejor se
              adapte a cada proyecto.
            </p>
            <ul class="out-regular list-ventas-negocio">
              <li>
                Si algo he aprendido en mi caso de emprendedora a CEO es que e
              </li>
              <li>
                Si algo he aprendido en mi caso de emprendedora a CEO es que e
              </li>
              <li>
                Si algo he aprendido en mi caso de emprendedora a CEO es que e
              </li>
            </ul>
          </div>
        </div>
        <!-- image rigth -->
        <div class="d-flex align-items-end " style="position:absolute;bottom: 0;right: 0;">
          <img
            class="family"
            src="./assets_landings/family.png"
            alt="IMPULSA LAS VENTAS DE TU NEGOCIO"
            srcset=""
          />
        </div>
      </div>
    </section>
    <!-- card hojas 3  -->
    <section class="bg-white">
      <div
        class="container-xl container-lg container-md container-sm py-4 mb-4"
      >
        <div
          class="row row-cols-1 row-cols-lg-3 row-cols-md-3 g-4 justify-content-center"
        >
          <div class="">
            <div
              class="d-flex flex-lg-row flex-row flex-md-column card-hoja justify-content-center align-items-center gap-3 p-2"
            >
              <img src="./assets_landings/hoja.png" alt="hoja" />
              <p class="mb-0 text-center text-lg-start color-plomo">
                Quieres lanzar tu propio negocio online o bien ya lo has
                lanzado, pero no sabes por dónde comenzar ni continuar.
              </p>
            </div>
          </div>
          <div class="">
            <div
              class="d-flex flex-row flex-lg-row  flex-md-column  card-hoja justify-content-center align-items-center gap-3 p-2"
            >
              <img src="./assets_landings/hoja.png" alt="hoja" />
              <p class="mb-0 text-center text-lg-start color-plomo">
                Quieres lanzar tu propio negocio online o bien ya lo has
                lanzado, pero no sabes por dónde comenzar ni continuar.
              </p>
            </div>
          </div>
          <div class="">
            <div
              class="d-flex flex-row flex-lg-row flex-md-column card-hoja justify-content-center align-items-center gap-3 p-2"
            >
              <img src="./assets_landings/hoja.png" alt="hoja" />
              <p class="mb-0 text-center text-lg-start color-plomo">
                Quieres lanzar tu propio negocio online o bien ya lo has
                lanzado, pero no sabes por dónde comenzar ni continuar.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- bento galery -->
    <section
      class="bg-white mb-5 container-xl container-lg container-md container-sm p-3 radius-section"
    >
      <div class="grid-bento-galery">
        <div class="bento1">
          <img src="./assets_landings/bento/bento1.png" alt="" srcset="" />
        </div>
        <div class="bento2">
          <img src="./assets_landings/bento/bento2.png" alt="" srcset="" />
        </div>
        <div class="bento3">
          <img src="./assets_landings/bento/bento3.png" alt="" srcset="" />
        </div>
        <div class="bento4">
          <img src="./assets_landings/bento/bento4.png" alt="" srcset="" />
        </div>
        <div class="bento5">
          <img src="./assets_landings/bento/bento5.png" alt="" srcset="" />
        </div>
        <div class="bento6">
          <img src="./assets_landings/bento/bento6.png" alt="" srcset="" />
        </div>
        <div class="bento7">
          <img src="./assets_landings/bento/bento7.png" alt="" srcset="" />
        </div>
        <div class="bento8">
          <img src="./assets_landings/bento/bento8.png" alt="" srcset="" />
        </div>
      </div>
    </section>

    <!-- section proyectos -->
    <section class="bg-white">
      <div
        class="flex-proyectos container-xl container-lg container-md container-sm py-5"
      >
        <div class="info-proyectos">
          <h2 class="color-primary out-Extrabold"><u>Nustros Proyectos</u></h2>
          <p class="color-plomo">
            Si algo he aprendido en mi caso de emprendedora a CEO es que el
            éxito o fracaso de un negocio
          </p>

          <p class="color-plomo">
          online <b>radica en la capacidad</b> de trazar la estrategia de
          marketing digital que mejor se adapte a cada proyecto.</p>

           <p class="color-plomo">
          online <b>radica en la capacidad</b> de trazar la estrategia de
          marketing digital que mejor se adapte a cada proyecto.</p>
        </div>

        <!-- swiper container card proyectos -->
        <div class="container-swiper d-flex position-relative">
          <!-- Slider main container -->
          <div class="swiper-button-prev-proyect"><i class="fa-solid fa-angle-left"></i></div>
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <!-- card -->
                <div class="card-proyect position-relative">
                  <img src="./assets_landings/proyecto/proyecto.png" alt="" />
                  <span class="title-span shadow px-4"><small>oxapampa</small></span>
                  <div class="bottom-card">
                    <span class="etiqueta-green">
                      <h4 class="out-semibold color-primary">
                        Fundo Valentina
                      </h4>
                    </span>
                    <a href="/" style="font-size:0.9rem ;letter-spacing: 1px;">VER MÁS</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- card -->
                <div class="card-proyect position-relative">
                  <img src="./assets_landings/proyecto/proyecto.png" alt="" />
                 <span class="title-span shadow px-4"><small>oxapampa</small></span>
                  <div class="bottom-card">
                    <span class="etiqueta-green">
                      <h4 class="out-semibold color-primary">
                        Fundo Valentina
                      </h4>
                    </span>
                     <a href="/" style="font-size:0.9rem;letter-spacing: 1px;">VER MÁS</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- card -->
                <div class="card-proyect position-relative">
                  <img src="./assets_landings/proyecto/proyecto.png" alt="" />
                  <span class="title-span shadow px-4"><small>oxapampa</small></span>
                  <div class="bottom-card">
                    <span class="etiqueta-green">
                      <h4 class="out-semibold color-primary">
                        Bella Primavera
                      </h4>
                    </span>
                      <a href="/" style="font-size:0.9rem;letter-spacing: 1px;">VER MÁS</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- card -->
                <div class="card-proyect position-relative">
                  <img src="./assets_landings/proyecto/proyecto.png" alt="" />
                  <span class="title-span shadow px-4"><small>oxapampa</small></span>
                  <div class="bottom-card">
                    <span class="etiqueta-green">
                      <h4 class="out-semibold color-primary">
                        El Arco Dorado
                      </h4>
                    </span>
                      <a href="/" style="font-size:0.9rem;letter-spacing: 1px;">VER MÁS</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-next-proyect"><i class="fa-solid fa-angle-right"></i></i></div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="cotainer-fluid position-relative">
      <div class="container-xl text-white mb-5">
        <!-- grid footer -->
        <div
          class="row row-cols-xl-3 row-cols-lg-1 row-cols-md-1 g-5 justify-content-xl-between justify-content-lg-center"
        >
          <!-- contactanos -->
          <div style="width: max-content" class="container-contact px-5">
            <h5 class="mb-4">Contáctanos</h5>
            <div class="d-flex gap-4 flex-column">
              <span class="d-flex gap-2 align-items-center"
                ><i class="fa-solid fa-phone"></i> +51 991 373 809</span
              >
              <span class="d-flex gap-2 align-items-center"
                ><i class="fa-regular fa-envelope"></i>ventas@robles.pe</span
              >
            </div>
          </div>
          <!-- Descubre más  -->
          <div style="width: max-content" class="descubreMas px-5">
            <h5 class="mb-4">Descubre más</h5>
            <div class="d-flex gap-3">
              <ul class="d-flex flex-column gap-2" >
                <li><i class="fa-solid fa-angle-right"></i> Inicio</li>
                <li><i class="fa-solid fa-angle-right"></i> Quienes Somos</li>
                <li><i class="fa-solid fa-angle-right"></i> Contacto</li>
                <li>
                  <i class="fa-solid fa-angle-right"></i> Politica y privacidad
                </li>
              </ul>
              <ul class="d-flex flex-column gap-2">
                <li><i class="fa-solid fa-angle-right"></i> Proyectos</li>
                <li><i class="fa-solid fa-angle-right"></i> Blogs</li>
                <li>
                  <i class="fa-solid fa-angle-right"></i> Terminos y condiciones
                </li>
                <li>
                  <i class="fa-solid fa-angle-right"></i> Libro de reclamaciones
                </li>
              </ul>
            </div>
          </div>
          <!-- siguenos -->
          <div
            style="width: max-content"
            class="siguenos-footer px-5 justify-self-lg-center"
          >
            <h5 class="mb-4">Síguenos</h5>
            <div class="d-flex gap-4 flex-wrap">
              <span class="bg bg-ligth"><i class="fa-brands fa-facebook-f color-primary"></i></span>
              <span class="bg bg-ligth"><i class="fa-brands fa-youtube color-primary"></i></span>
              <span class="bg bg-ligth"><i class="fa-brands fa-instagram color-primary"></i></span>
              <span class="bg bg-ligth"><i class="fa-brands fa-linkedin-in color-primary"></i></span>
              <span class="bg bg-ligth"><i class="fa-brands fa-tiktok color-primary"></i></span>
            </div>
          </div>
        </div>
      </div>
      <section
        class="d-flex justify-content-center align-items-center copyright text-white py-4"
      >
        <p class="mb-0" style="font-size:0.8rem">
          Copyright© 2023 - Robles & Yasikov. Todos los derechos reservados.
        </p>
      </section>
    </footer>
  </body>

  <script>
    const swiper = new Swiper(".swiper", {
      // Optional parameters
      loop: true,
      spaceBetween: 10,
      slidesPerView: 1.3,
      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next-proyect",
        prevEl: ".swiper-button-prev-proyect",
      },

      breakpoints: {
        // when window width is >= 320px
        552: {
          slidesPerView: 2,
        },
        // when window width is >= 480px
        779: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</html>
