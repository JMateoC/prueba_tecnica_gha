<?php

class bd
{
    private $host = 'localhost';
    private $bd = 'id22000371_bd_crud';
    private $usuario = 'id22000371_root';
    private $contrasena = 'Psswd321#';

    public function conexion()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->usuario, $this->contrasena);

            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
