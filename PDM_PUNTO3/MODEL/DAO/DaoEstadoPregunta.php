<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 15:37
 */

include_once("../../SERVICES/Conexion.php");
require_once("DaoInterface.php");

class DaoEstadoPregunta implements DaoInterface
{
    private $conn;

    public function __construct()
    {
        $this->conn= Conexion::connect();
    }

    public function crear($dto)
    {
        $query = "INSERT INTO tbl_preguntas( descripcion)VALUES ( ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam(1, $dto->getDescripcion());
        return $stmt->execute();
        Conexion::disconnect();
    }

    public function actualizar($dto)
    {
        $query = "UPDATE tbl_estadospregunta
                    SET descripcion=?
                    WHERE idestado=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam(1, $dto->getDescripcion());
        $stmt->bindparam(2, $dto->getIdestado());
        return $stmt->execute();

    }

    public function traerTodos()
    {
        $query = "SELECT * FROM tbl_estadospregunta ORDER BY idestado";
        $resultado=$this->conn->query($query);
        $result=null;
        foreach($resultado->fetchAll(PDO::FETCH_OBJ) AS $row){
            $newUser = new DtoEstadoPregunta($row->idestado,$row-> descripcion);
            $result[] = $newUser;
        }

        return $result;
        Conexion::disconnect();
    }

    public function traerPorId($id)
    {
        $query = "SELECT * FROM tbl_estadospregunta  WHERE idestado=".$id." ORDER BY idestado";
        $resultado=$this->conn->query($query);
        $result=null;
        foreach($resultado->fetchAll(PDO::FETCH_OBJ) AS $row){
            $newUser = new DtoEstadoPregunta($row->idestado,$row-> descripcion);
            $result[] = $newUser;
        }

        return $result;
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }
}