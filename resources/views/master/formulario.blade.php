   <div class="    pt-4 shadow" style="background:  #FBFBFB">
            
               <h6 class="  contacto-span text-center" style="padding:0px 40px">Completa el formulario y nosotros te contactaremos</h6>
               

                  <div class="container" >
                        
                        <form class="" id="promocion-form"  method="POST"  action="">


                            @csrf



                             @php
                                          
                                          
                                          $condicion = config('sperant.getIdProject'); 

                                      @endphp



                           <input type="hidden" name="formulario" id="formulario" value="formulario-detalle">
                          
                           <input type="hidden" name="mensaje" id="mensaje" value="">
                           <input type="hidden" name="proyecto" id="proyecto" value="{{ $condicion ? $proyetoactual->id_sperant : $proyetoactual->idproyecto }}">
                           






                           <div class="form-row">
                              <div class="input-data">
                                   <input type="text" id="nombre" name="nombre" required>
                                 <div class="underline"></div>
                                 <label for="">Nombres</label>
                              </div>
                             
                           </div>


                           <div class="form-row">
                            
                              <div class="input-data">
                                  <input type="text" id="apellido" name="apellido" required>
                                 <div class="underline"></div>
                                 <label for="">Apellidos</label>
                              </div>
                           </div>


                           <div class="form-row">
                            
                              <div class="input-data">
                                  <input type="text" id="email" name="email" required>
                                 <div class="underline"></div>
                                 <label for="">Correo</label>
                              </div>
                           </div>


                           <div class="form-row">
                            
                              <div class="input-data">
                                  <input type="text" id="movil" name="movil" required oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="9">
                                 <div class="underline"></div>
                                 <label for="">Celular</label>
                              </div>
                           </div>

                           <div class="form-row d-none">
                               
                               <div class="input-data ">
                                    
                                   

                                     <select id="horario" name="horario" class="form-select raleway-medium" aria-label="Default select example">
                                      
                                      
                                      <option selected value="">
                                          <Open>Horario de Llamada
                                      </option>
                                     <option value="9:00">9:00</option>
                                      <option value="10:00">10:00</option>
                                       <option value="11:00">11:00</option>
                                       <option value="12:00">12:00</option>
                                       <option value="13:00">13:00</option>
                                       <option value="14:00">14:00</option>
                                       <option value="15:00">15:00</option>
                                       <option value="16:00">16:00</option>
                                       <option value="17:00">17:00</option>
                                       <option value="18:00">18:00</option>
                                    </select>
                                    

                                  
                                   

                                      </div>
                           </div>

                          
                            


                            <div class="form-row">
                            
                              <div class="input-data">
                                <small class="text-center">Al enviar este formulario estás aceptando nuestros <a target="_blank" href="{{url('/terminos')}}" class="color-green-2" style="text-decoration:underline;">términos y condiciones</a> y <a target="_blank"  href="{{url('/politicas')}}" class="color-green-2" style="text-decoration:underline;">las políticas de protección de datos.</a> </small>
                              </div>
                           </div>



                          



                            <div class="py-1 px-4" style="margin-top:40px ;">
                                
                                <span id="errores" class="text-danger" style="font-size:12px">
                                   
                                 </span>
                              </div>

                              <div class="form-row mt-5 ">


                                <div class="input-data textarea mb-5">

                                      


                                       <button   type="button" id="btn-enviar-promo"  class="w-100 btn raleway-bold py-2  bg-terce text-white">Solicitar Información</button>

                                         <!-- <a class="btn  w-100 mt-2 text-white " target="_blank"  href=" {{$telefono_footer->getPhoneProyect(0)}}"  style="background: #25D366;"><i class="fab fa-whatsapp me-2"></i> Contáctanos por Whatsapp.</a> -->

                                </div>

                              </div>


                                
                                
                            </form>
                        </div>



      </div> 