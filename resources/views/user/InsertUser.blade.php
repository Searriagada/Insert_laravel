<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario insertar usuario</title>
</head>
<body>
    <h1>Es hora de crear un nuevo usuario</h1>
    <Table>
        <form action="/evaluacion_02_Software_web/public/User/UserInsert" method="POST">
            @csrf
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>   
                <td>Correo</td>
                <td><input type="mail" name="correo" id="correo"></td>
            </tr>
            <tr>   
                <td>Contraseña</td>
                <td><input type="text" name="clave" id="clave"></td>            
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Ingresar"></td>
            </tr>
        </form>
        
    </Table>
</body>
</html>