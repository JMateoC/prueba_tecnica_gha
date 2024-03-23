<?php
require_once dirname(__DIR__) . '/Controlador/usuarioControlador.php';
$controlador = new usuarioControlador();

$identificacion = $_GET['identificacion'];
if ($controlador->eliminarUsuario($identificacion)) {
    header('Location: read.php');
} else {
    echo 'Error al eliminar el usuario.';
}
