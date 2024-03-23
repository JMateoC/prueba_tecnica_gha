<?php
require_once dirname(__DIR__) . '/Controlador/usuarioControlador.php';
$controlador = new usuarioControlador();
$idUsuario = $_GET['identificacion'];
$usuario = $controlador->leerUsuarioPorIdentificacion($idUsuario);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <title>Actualizar</title>
</head>

<body>
    <h1>Actualizar Usuario</h1>
    <form action="update.php" method="POST" autocomplete="off" class="form">

        <input type="hidden" name="identificacion" value="<?= $usuario['identificacion'] ?>" class="form-control">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required value="<?= $usuario['nombre'] ?>" class="form-control" class="form-control">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required value="<?= $usuario['apellido'] ?>" class="form-control">

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required value="<?= $usuario['edad'] ?>" class="form-control">

        <label for="email">Email:</label>
        <input type="email" name="email" required value="<?= $usuario['email'] ?>" class="form-control">

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required value="<?= $usuario['contrasena'] ?>" class="form-control">

        <div class="botones">
            <button type="submit" value="Actualizar" class="btn">Actualizar</button>
            <a href="read.php" class="btn btn-cancelar">Cancelar</a>
        </div>
    </form>

</body>

</html>