<?php
require_once dirname(__DIR__) . '/Controlador/usuarioControlador.php';

$controlador = new usuarioControlador();
$usuarios = $controlador->leerUsuario();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <title>Usuarios</title>
</head>

<body>

    <h1>Información Usuario</h1>

    <div class="tabla-container">

        <table>
            <thead>
                <tr>
                    <th scope="col">IDENTIFICACION</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">EDAD</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">OPERACIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <td scope="col"><?= $usuario['identificacion'] ?></td>
                        <td scope="col"><?= $usuario['nombre'] ?></td>
                        <td scope="col"><?= $usuario['apellido'] ?></td>
                        <td scope="col"><?= $usuario['edad'] ?></td>
                        <td scope="col"><?= $usuario['email'] ?></td>
                        <td scope="col">
                            <a href="editar.php?identificacion=<?= $usuario['identificacion'] ?>" class="btn">Editar</a>
                            <a href="delete.php?identificacion=<?= $usuario['identificacion'] ?>" class="btn btn-cancelar" id="btnEliminar">Eliminar</a>
                        </td>


                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <a href="index.php" class="btn btn-volver">Volver</a>
    </div>

    <div id="modalEliminacion" class="modal">
        <div class="cuerpoModal">
            <h2>Confirmar eliminación</h2>
            <p>El usuario se eliminará del sistema, ¿estás seguro que lo quieres eliminar?</p>
            <button id="btnConfirmar" class="btn btn-cancelar">Sí, eliminar</button>
            <button id="btnCancelar" class="btn">No, cancelar</button>
        </div>
    </div>

    <script src="../assets/js/modal.js"></script>
</body>

</html>