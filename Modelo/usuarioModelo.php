<?php
class usuarioModelo
{
    private $pdo;

    public function __construct()
    {
        require_once dirname(__DIR__) . '/config/bd.php';
        $con = new bd();
        $this->pdo = $con->conexion();
    }

    public function create($identificacion, $nombre, $apellido, $edad, $email, $contrasena)
    {
        $sql = "INSERT INTO usuario (identificacion, nombre, apellido, edad, email, contrasena) VALUES (?,?,?,?,?,?)";
        $query = $this->pdo->prepare($sql);
        $result = $query->execute(array($identificacion, $nombre, $apellido, $edad, $email, $contrasena));
        return $result;
    }

    public function read()
    {
        $sql = "SELECT * FROM usuario";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function readIdentificacion($identificacion)
    {
        $sql = "SELECT * FROM usuario WHERE identificacion=?";
        $query = $this->pdo->prepare($sql);
        $query->execute(array($identificacion));
        return $query->fetch();
    }

    public function update($identificacion, $nombre, $apellido, $edad, $email, $contrasena)
    {
        $sql = "UPDATE usuario SET nombre=?, apellido=?, edad=?, email=?, contrasena=? WHERE identificacion=?";
        $query = $this->pdo->prepare($sql);
        $result = $query->execute(array($nombre, $apellido, $edad, $email, $contrasena, $identificacion));
        return $result;
    }

    public function delete($identificacion)
    {
        $sql = "DELETE FROM usuario WHERE identificacion=?";
        $query = $this->pdo->prepare($sql);
        $result = $query->execute(array($identificacion));
        return $result;
    }
}
