
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro de Nuevo Cliente !!</title>
</head>
<body>


    <p>Hola! Se ha reportado un nuevo ingreso de cliente desde la web .</p><br>
    <p>Estos son los datos registrados :</p>
    <ul>
        <li>Nombres : {{ $distressCall->nombre }}</li>
        <li>Apellidos : {{ $distressCall->apellido }}</li>
        <li>Email : {{ $distressCall->email }}</li>
        <li>Telefono : {{ $distressCall->movil }}</li>
    </ul>

    <p><strong>Datos del Proyecto:</strong></p><br>
    <ul>
        <li>Proyecto : {{ $name }}</li>
        <li>{{ $distressCall->cabana ==1 ? 'Cabaña' : 'Lote' }}</li>
        

        

    </ul>

    
</body>
</html>