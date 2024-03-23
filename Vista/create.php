<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <title>Crear Usuario</title>

</head>

<body>
    <h1>Crear Usuario</h1>
    <form action="../main.php" method="POST" class="form">
        <label for="identificacion">Identificación:</label>
        <input type="text" name="identificacion" class="form-control" required>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" class="form-control" required>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" class="form-control" required>

        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" class="form-control" required>

        <div class="botones">
            <a href="index.php" class="btn btn-cancelar">Cancelar</a>
            <button type="submit" value="Enviar" class="btn">Crear</button>
        </div>
    </form>
</body>

</html>