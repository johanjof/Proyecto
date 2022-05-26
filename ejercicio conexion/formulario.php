<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form action="registrar.php" method="post">
        <div class="form-group">
            <h2>Registro</h2>
        </div>
        <div class="form-group">
            <label> Cedula </label>
            <input type="number" name="ced" placeholder="cedula" autofocus>
        </div>
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nom" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="ape" placeholder="Apellido">
        </div>

        <input type="submit" value="Enviar" name="botoncito">

    </form>
</body>

</html>