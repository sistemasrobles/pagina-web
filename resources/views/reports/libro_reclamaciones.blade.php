<html>
<head>
  <title>Informe de Laboratorio</title>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 100px 30px 120px 30px;
    }
    header { 
      position: fixed;   
      left: 0px;
      top: -90px;
      right: 0px;
      height: 100px; 
     
      
      text-align: center;

    }
   
    footer {
      position: fixed;
      left: 0px;
      bottom: -90px;
      right: 0px;
      height: 20px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
      font-size: 10px;
      margin: 2px;
    }
    footer .izq {
      text-align: left;
    }

    tfoot tr td{
      text-align: right;
      padding-left: 10px;
    }

    .page{

        font-size: 12px;
    }
    .customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
     
      width: 100%;
      padding-top: 0px;
    }

    .customers td{
       
      padding: 2px;
      font-size: 10px;
      
    } 

    


  table {

    width:100%;
    font-size: 12px !important;
    border-collapse: collapse;
    margin: 0 auto;
}

th, td {
    border: 1px solid black; 
}


tr:first-child th:last-child {
    border-bottom: none;
}


tr:nth-child(2) th:last-child {
    border-top: none;
}



tr:nth-child(3) td:last-child {
    border-bottom: none;
}


tr:nth-child(4) td:last-child {
    border-top: none;
}



tr:nth-child(11) td:last-child {
    border-bottom: none;
}


tr:nth-child(12) td:last-child {
    border-top: none;
}



  </style>
</head>
<body>
    <header>
       <div style="width:100%;text-align: center;">
  

   <img src="data:image/png;base64,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" alt="..." class="">






  </div> 
  

         


    </header>


 
    
   
  
 <div id="content" style="border:0px solid black;">
   
  
        

       

         
          <table  >
           

          
                    <tr>
                      <th colspan="4" style="text-align: center;width: auto;background: #DDDDDD;padding: 5px;">LIBRO DE RECLAMACIONES </th>
                      
                     <th  colspan="2" style="text-align: center;width: auto;padding: 5px;">HOJA DE RECLAMACIÓN</th>
                    </tr>

                     <tr>
                      <th  style="text-align: left;width: 10%;padding: 5px;">FECHA:</th>
                       <td  style="text-align: left;width:15%;padding: 5px;">{{date("Y-m-d", strtotime($now))}} </td>
                       <th  style="text-align: left;width: 10%;padding: 5px;">HORA</th>
                      <td  style="text-align: left;width: 15%;padding: 5px;">{{date("H:i:s", strtotime($now))}} </td>

                      <th  colspan="2" style="text-align: center;width: auto;padding: 5px;">Nº {{$codigo}}</th>

                    </tr>

                    <tr>
                      
                      <td colspan="6" style="padding:5px">
                        GRUPO ROBLES & YASIKOV S.A.C / RUC 20607487767

                      </td>
                    </tr>
                    <tr>
                      
                      <td colspan="6" style="padding:5px">
                        Av. Circunvalación del Golf Los Incas #154


                      </td>
                    </tr>

                    <tr>
                      <th colspan="6" style="text-align: left;width: auto;background: #DDDDDD;padding: 5px;">1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE</th>
                      
                     
                    </tr>
                    <tr>
                      <td colspan="6" style="text-align: left;width: auto;padding: 5px;"><span style="font-weight: 700;">NOMBRE :</span> {{$data->nombres}} {{$data->apepat}} {{$data->apemat}}</td>
                      
                     
                    </tr>
                     <tr>
                      <td colspan="6" style="text-align: left;width: auto;padding: 5px;"><span style="font-weight: 700;">DOMICILIO :</span> {{$data->departamento}}/{{$data->provincia}}/{{$data->distrito}} {{$data->direccion_cliente}}</td>
                      
                     
                    </tr>

                    <tr>
                      <td colspan="2" style="text-align: left;width: auto;padding: 5px;"><span style="font-weight: 700;">DNI :</span>{{$data->numero_documento}}</td>
                      <td colspan="2" style="text-align: left;width: auto;padding: 5px;"><span style="font-weight: 700;">TELÉFONO :</span> {{$data->celular}}</td>
                      <td colspan="2" style="text-align: left;width: auto;padding: 5px;"><span style="font-weight: 700;">EMAIL :</span> {{$data->email}}</td>
                      
                     
                    </tr>

                    <tr>
                      <td colspan="6" style="text-align: left;width: auto;padding: 5px;"><span style="font-weight: 700;">PADRE O MADRE: :</span> {{$data->apoderado}}</td>
                      
                     
                    </tr>

                     <tr>
                      <th colspan="6" style="text-align: left;width: auto;background: #DDDDDD;padding: 5px;">2. IDENTIFICACIÓN DEL BIEN CONTRATADO
                        </th>
                      
                     
                    </tr>


                    <tr>
                      <th colspan="1" style="text-align: left;width: auto;padding: 5px;">PRODUCTO</th>
                        
                      
                     <td style="width:5%;text-align: center;font-size: 12px;">x </td>

                       <td colspan="4" style="text-align:left;width: auto;padding: 5px;"> <span style="font-weight: 700;">MONTO RECLAMADO :</span> {{ number_format($data->monto_reclamado, 2, ',', '.') }}</td>

                      </tr>
                      


                     <tr>
                      <th colspan="1" style="text-align: left;width: auto;padding: 5px;">SERVICIO</th>
                        

                         <td style="width:5%;text-align: center;font-size: 23px;"> </td>
                        
                       <td colspan="4" style="text-align:left;width: auto;padding: 5px;"> <span style="font-weight: 700;">DESCRIPCIÓN :</span> {{$data->bien}}</td>
                      
                     
                    </tr>

                     <tr>
                      <th colspan="5" style="text-align: left;width: auto;background: #DDDDDD;padding: 5px;">3. DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR </th>
                       
                      

                      <th colspan="1" style="text-align: left;width: auto;padding: 0px;margin:0px">

                          <table style="width: 100%;">
                            <tr>
                              <td style="padding:5px;border:none !important"><strong>RECLAMO <sup>1</sup></strong></td>
                               <td style="padding:5px;border-top:none !important;border-bottom: none !important;text-align: center;">{{ $data->gridRadios === 'reclamo' ? 'x' : '' }}</td>
                                <td style="padding:5px;border-top:none !important;border-bottom: none !important;"><strong>QUEJA<sup>2</sup></strong></td>
                               <td style="padding:5px;border:none !important;text-align: center;">{{ $data->gridRadios === 'queja' ? 'x' : '' }}</td>
                            </tr>
                          </table>
                       </th>
                      

                       
                      


                     
                    </tr>





                     <tr>
                    
                        
                       <td colspan="6" style="text-align:left;width: auto;padding: 5px;height: 100px;vertical-align: top;"> <span style="font-weight: 700;">DETALLE : </span>{{$data->queja}}</td>
                      
                     
                    </tr>


                     <tr>
                    
                        
                       <td colspan="5" style="text-align:left;width: auto;padding: 5px;height: auto;vertical-align: top;"> <span style="font-weight: 700;">PEDIDO : </span>{{$data->pedido}}</td>
                      <td colspan="1" style="padding: 0px;margin:0px">
                        <table style="width: 100%;">
                          <tr>
                            <td align="center"style="padding:30px;border:none !important"></td>
                          </tr>
                          <tr>
                            <td align="center" style="padding:5px;border-bottom:none !important;border-left:none !important;border-right:none !important"><strong>FIRMA DEL CONSUMIDOR</strong></td>
                          </tr>
                        </table>
                      </td>
                     
                    </tr>


                      <tr>
                      <th colspan="6" style="text-align: left;width: auto;background: #DDDDDD;padding: 5px;">4. OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR </th>
                      
                     
                    </tr>

                     <tr>
                      <td colspan="4" style="text-align: left;width: auto;padding: 5px;"><strong>FECHA DE COMUNICACIÓN DE LA RESPUESTA :</strong> </td>
                      
                       <td  colspan="1" style="text-align: left;width: auto;padding: 0px;margin: 0px"> 


                          <table style="width:100%;">
                            <tr style="">
                              <td style="text-align:center;padding:12px;border-top:none;border-bottom:none;border-left: none;"></td>
                              <td style="text-align:center;padding:12px;border:none !important"></td>
                              <td style="text-align:center;padding:12px;border-top:none;border-bottom:none;border-right: none;"></td>
                            </tr>
                          </table>
                       </td>


                     <td colspan="1" style="text-align: left;width: auto;padding: 5px;"> </td>
                    </tr>

                    <tr>
                    
                        
                       <td colspan="5" style="text-align:left;width: auto;padding: 5px;height: auto;vertical-align: top;"> </td>
                      <td colspan="1" style="padding: 0px;margin:0px">
                        <table style="width: 100%;">
                          <tr>
                            <td align="center"style="padding:30px;border:none !important"></td>
                          </tr>
                          <tr>
                            <td align="center" style="padding:5px;border-bottom:none !important;border-left:none !important;border-right:none !important"><strong>FIRMA DEL PROVEEDOR</strong></td>
                          </tr>
                        </table>
                      </td>
                     
                    </tr>



                     <tr>
                    
                        
                       <td colspan="3" style="text-align:left;width: auto;padding: 5px;height: 50px;vertical-align: top;"> <span style="font-weight: 700;"><sup>1</sup>RECLAMO : </span><span > Disconformidad relacionada a los  productos o servicios.</span></td>
                      
                        <td colspan="3" style="text-align:left;width: auto;padding: 5px;height: 50px;vertical-align: top;"> <span style="font-weight: 700;"><sup>2</sup> QUEJA : </span><span > Disconformidad no relacionada a los productos o servicios;<br> o, malestar o descontento respecto a la atención al público.</span></td>
                    </tr>

                     <tr>
                    
                        
                       <td colspan="6" style="text-align:left;width: auto;padding: 5px;height: auto;vertical-align: top;"> DESTINATARIO : CONSUMIDOR</td>
                      
                     
                    </tr>


                     <tr>
                    
                        
                       <td colspan="6" style="text-align:left;width: auto;padding: 5px;height: auto;vertical-align: top;"> * La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI</td>
                      
                     
                    </tr>

                     <tr>
                    
                        
                       <td colspan="6" style="text-align:left;width: auto;padding: 5px;height: auto;vertical-align: top;"> * El proveedor debe dar respuesta al reclamo o queja en un plazo no mayor a quince (15) días hábiles, el cual es improrrogable .</td>
                      
                     
                    </tr>



         </table>
         

         





        
         

 </div>
 
    
  

  
  



   
           
</html>