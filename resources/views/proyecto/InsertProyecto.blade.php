<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario insertar proyecto</title>
</head>
<body>
    <h1>Es hora de crear un proyecto</h1>
    <Table>
        <form action="/evaluacion_02_Software_web/public/Proyecto/FormInsert" method="POST">
            @csrf
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>   
                <td>Fecha de inicio</td>
                <td><input type="date" name="fecha_inicio" id="fecha_inicio"></td>
                <td>Estado</td>
                <td><input type="text" name="estado" id="estado"></td>
            </tr>
            <tr>   
                <td>Responsable</td>
                <td><input type="text" name="responsable" id="responsable"></td>
                <td>Monto</td>
                <td><input type="text" name="monto" id="monto"></td>              
            </tr>
            <tr>
                <td>Creado por</td>
                <td><input type="text" name="create_by" id="create_by"></td> 
                <td colspan="2" align="right"><input type="submit" value="Ingresar"></td>
            </tr>
        </form>
        
    </Table>
</body>
</html>