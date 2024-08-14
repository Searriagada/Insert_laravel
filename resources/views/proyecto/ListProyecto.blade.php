<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Proyectos</h1>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Fecha_Inicio</td>
            <td>Estado</td>
            <td>Responsable</td>
            <td>Monto</td>
            <td>Creado_por</td>
        </tr>
        @foreach ($proyecto as $row )
        <tr>
            <td>{{$row->ID_PROYECTO }}</td>
            <td>{{$row->VCH_NOMBRE_PROYECTO}}</td>
            <td>{{$row->DATE_FECINI_PROYECTO}}</td>
            <td>{{$row->VCH_ESTADO_PROYECTO}}</td>
            <td>{{$row->VCH_RESPONSABLE_PROYECTO}}</td>
            <td>{{$row->INT_MONTO_PROYECTO}}</td>
            <td>{{$row->created_by}}</td>
        </tr>
 
        @endforeach
        
    </table>


    






</body>
</html>