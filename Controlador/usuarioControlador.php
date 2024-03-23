<?php

class usuarioControlador
{
    private $modelo;
    public function __construct()
    {
        require_once dirname(__DIR__) . '/Modelo/usuarioModelo.php';
        $this->modelo = new usuarioModelo();
    }

    public function crearUsuario($identificacion, $nombre, $apellido, $edad, $email, $contrasena)
    {
        return $this->modelo->create($identificacion, $nombre, $apellido, $edad, $email, $contrasena);
    }

    public function leerUsuario()
    {
        return $this->modelo->read();
    }

    public function leerUsuarioPorIdentificacion($identificacion)
    {
        return $this->modelo->readIdentificacion($identificacion);
    }

    public function actualizarUsuario($identificacion, $nombre, $apellido, $edad, $email, $contrasena)
    {
        return $this->modelo->update($identificacion, $nombre, $apellido, $edad, $email, $contrasena);
    }

    public function eliminarUsuario($identificacion)
    {
        return $this->modelo->delete($identificacion);
    }
}
