<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de usuarios</h1>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Contraseña</td>
        </tr>
        @foreach ($usuario as $row )
        <tr>
            <td>{{$row->id_usuario  }}</td>
            <td>{{$row->nombre_usuario}}</td>
            <td>{{$row->correo_usuario }}</td>
            <td>{{$row->clave_usuario}}</td>
        </tr>
 
        @endforeach
        
    </table>


    






</body>
</html>