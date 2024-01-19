<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro de Libro de Reclamación</title>
</head>
<body>


    <p>Hola! Se ha reportado un nuevo registro de libro de reclamación .</p>

    <h2>* El proveedor debe dar respuesta al reclamo o queja en un plazo no mayor a quince (15) días hábiles, el cual es improrrogable.</h2>
    <p>Estos son los datos registrados :</p>

     <p><strong>Datos de la Empresa:</strong></p>
    <ul>

         <li>RUC : {{ $distressCall->ruc }}</li>
        <li>Empresa : {{ $distressCall->razon }}</li>
        <li>Dirección : {{ $distressCall->direccion }}</li>
        <li>Fecha de Registro : {{ $time }}</li>

        <li>Código  : {{ $codigo }}</li>

    </ul>


     <p><strong>Datos del Proyecto:</strong></p>
    <ul>
        <li>Proyecto : {{ $name }}</li>   

    </ul>

     <p><strong>Datos del Cliente:</strong></p>

    <ul>
        <li>Nombres : {{ $distressCall->nombres }}</li>
        <li>Apellido Paterno : {{ $distressCall->apepat }}</li>
         <li>Apellido Materno : {{ $distressCall->apemat }}</li>

         <li>Celular : {{ $distressCall->celular }}</li>
         <li>Fijo : {{ $distressCall->fijo }}</li>
        <li>Email : {{ $distressCall->email }}</li>


        <li>Departamento : {{ $distressCall->departamento }}</li>
        <li>Provincia : {{ $distressCall->provincia }}</li>
        <li>Distrito : {{ $distressCall->distrito }}</li>
        <li>Dirección : {{ $distressCall->direccion_cliente }}</li>
        <li>Apoderado : {{ $distressCall->apoderado }}</li>
    </ul>


     <p><strong>Datos del Bien:</strong></p>
     <ul>
         
          <li>Descripción : <br>{{ $distressCall->bien }}</li>
          <li>Monto :{{ $distressCall->monto_reclamado }}</li>

     </ul>
    

     <p><strong>Detalle del Reclamo:</strong></p>
     <ul>
         
         <li>Tipo de Reclamo : {{ $distressCall->gridRadios }}</li>
         <li>Descripción : <br>{{ $distressCall->queja }}</li>
         <li>Pedido del cliente : <br>{{ $distressCall->pedido }}</li>

     </ul>
 

       



    <p>Sistema Automatizado de Correos - Área de Sistemas<br>{{ config('app.name') }}</p>
    
</body>
</html>