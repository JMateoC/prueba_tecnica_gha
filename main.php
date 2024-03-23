<?php
require_once __DIR__ . '/Controlador/usuarioControlador.php';
// Recoger los datos del formulario
$identificacion = isset($_POST['identificacion']) ? $_POST['identificacion'] : NULL;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
$edad = isset($_POST['edad']) ? $_POST['edad'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : NULL;

// instanciando el controlador
$controlador = new usuarioControlador();

// intentando crear el usuario

if ($controlador->crearUsuario($identificacion, $nombre, $apellido, $edad, $email, $contrasena)) {
    header('Location: Vista/read.php');
} else {
    echo 'Error al crear el usuario.';
}
