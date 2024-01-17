<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro de Libro de Reclamación</title>
</head>
<body>


    <p>Hola! Se ha reportado un nuevo registro de libro de reclamación .</p><br>
    <p>Estos son los datos registrados :</p>


     <p><strong>Datos de la Empresa:</strong></p><br>
    <ul>

         <li>RUC : {{ $distressCall->ruc }}</li>
        <li>Empresa : {{ $distressCall->razon }}</li>
        <li>Dirección : {{ $distressCall->direccion }}</li>
        

        

    </ul>


     <p><strong>Datos del Proyecto:</strong></p><br>
    <ul>
        <li>Proyecto : {{ $name }}</li>
       
        

        

    </ul>

    

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


         <li>Descripción del Bien Adquirido : {{ $distressCall->bien }}</li>
         <li>Tipo de Reclamo : {{ $distressCall->gridRadios }}</li>

         <li>Descripcion del Tipo de Reclamo : {{ $distressCall->queja }}</li>
         <li>Pedido del cliente : {{ $distressCall->pedido }}</li>
    </ul>

   

    
</body>
</html>