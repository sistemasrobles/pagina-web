<!DOCTYPE html>
<html>
 <head>
    
    <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guias Robles</title>

    <style type="text/css">
    	*{
    	
    	}

    	



    	.radius-section {
		  border-radius: 20px;
		}


		input::placeholder {
		  font-size: 0.8rem;
		}
		.fs-8 {
		  font-size: 0.8rem !important;
		}
		.form-participacion > button {

		  width: 100%;
		  font-family: var(--font-title);
		  font-size: 18px;
		  background: linear-gradient(to bottom, #005c53 0%, #00968b 100%);
		  color: white;
		  padding: 0.4em 1.2em;
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  border: none;
		  border-radius: 10px;
		  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
		  transition: all 0.3s;
		}

		.form-participacion > button:hover {
		  transform: translateY(-3px);
		  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
		}

		.form-participacion > button:active {
		  transform: scale(0.95);
		  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
		}

		.form-participacion > button span {
		  display: block;
		  margin-left: 0.4em;
		  transition: all 0.3s;
		}

		.form-participacion > button svg {
		  width: 18px;
		  height: 18px;
		  fill: white;
		  transition: all 0.3s;
		}

		.form-participacion > button .svg-wrapper {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  width: 30px;
		  height: 30px;
		  border-radius: 50%;
		  background-color: rgba(255, 255, 255, 0.2);
		  margin-right: 0.5em;
		  transition: all 0.3s;
		}

		.form-participacion > button:hover .svg-wrapper {
		  background-color: rgba(255, 255, 255, 0.5);
		}

		.form-participacion > button:hover svg {
		  transform: rotate(45deg);
		}
		.form-check-input:checked {
		  background-color: #00968b !important;
		  border-color: #ffffff !important;
		}
		.form-control:focus {
		  box-shadow: 0 0 0 0.25rem rgba(0, 150, 140, 0.25) !important;
		}

		.form-control > input {
		  border: none;
		  outline: none;
		}

		.color-plomo{
			color :#858585;
		}

		h1{

    		font-size:1.5rem;
    		font-weight: 700;
    	}

    	hr{
    		background: #c0c0c0;
    		width: 100%;
    		

    	}

    </style>
  </head>
<body>

<header>
	
	<div class="container-fluid " >
		
		<div class="row " >
				
			<div class="col-lg-8 ">
				<img src="https://tarjetaoh.pe/afiliacion-digital/assets/images/landing-final.jpg" class="img-fluid w-100" />
			</div>

			<div class="col-lg-4 p-5">
				
				<div class="">
					
					<h1>¡ Agenda Una Visita Guiada !</h1>


					<p class="mt-3 mb-4 color-plomo" >
						Agenda una Visita guiada y conoce todos los beneficios que este hermoso proyecto ofrece.
					</p>
					<hr >
 				<form
		          id="form-proyect"
		          style="max-width: 480px;"
		          class="  d-flex gap-2 flex-column justify-content-center bg-white py-2 radius-section text-black w-100 my-3 my-sm-0"
       				 >
         

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
              Al enviar este formulario estás aceptando nuestros <a href="https://gruporobles.com.pe/terminos" target="_blank" class="color-primary no-hover">términos y condiciones</a> y las <a href="https://gruporobles.com.pe/politicas" class="color-primary no-hover" target="_blank">políticas de protección de datos</a>.
            </p>
          <span
            class="form-participacion w-100 d-flex justify-content-center align-items-center"
          >
            <button class="">
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
			</div>
		</div>
	</div>
</header>

</body>
</html>