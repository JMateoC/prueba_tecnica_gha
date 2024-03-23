<?php
require_once dirname(__DIR__) . '/Controlador/usuarioControlador.php';

$identificacion = isset($_POST['identificacion']) ? $_POST['identificacion'] : NULL;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
$edad = isset($_POST['edad']) ? $_POST['edad'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : NULL;

$controlador = new usuarioControlador();

if ($controlador->actualizarUsuario($identificacion, $nombre, $apellido, $edad, $email, $contrasena)) {
    header('Location: read.php');
} else {
    echo 'Error al actualizar el usuario.';
}
