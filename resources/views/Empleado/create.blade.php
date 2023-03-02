<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <h1>Formmulario de creacion de empleado</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="Nombre"> Nombre:</label>
    <input type="text" name="Nombre" id="Nombre"> 
    <br>
    <label for="ApellidoPaterno">Apellido Paterno: </label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno"> 
    <br>
    <label for="ApellidoMaterno">Apellido Materno:</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno"> 
    <br>
    <label for="Correo">Correo: </label>
    <input type="text" name="Correo" id="Correo"> 
    <br>
    <label for="Foto">Foto: </label>
    <input type="file" name="Foto" id="Foto"> 
    <br>

    <input type="submit" name="Enviar"> 
    <br>
    </form>
</body>
</html>