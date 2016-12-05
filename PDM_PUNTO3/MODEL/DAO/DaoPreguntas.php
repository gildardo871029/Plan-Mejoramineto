<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 04/12/2016
 * Time: 7:15
 */
require_once("C:\\xampp\htdocs\PDM_PHP\PDM_PUNTO3\MODEL\DTO\DtoPregunta.php");
require_once("C:\\xampp\htdocs\PDM_PHP\PDM_PUNTO3\SERVICES/Conexion.php");
require_once("DaoInterface.php");

class DaoPreguntas implements DaoInterface
{
    private $conn;
    public function __construct()
    {
        $this->conn= Conexion::connect();
    }

    public function crear($dto)
    {
        $query = "INSERT INTO tbl_preguntas(
            idpregunta, pregunta, tipotrabajo, fechacreacion, fecharespuesta,
            respuesta, estado, creador)
    VALUES (?, ?, ?, ?, ?,
            ?, ?, ?);
";
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam(1,$dto->getPregunta());
        $stmt->bindparam(2,$dto->getIdTipoTrabajo());
        $stmt->bindparam(3,$dto->getCreador());
        $stmt->bindparam(4,$dto->getCreador());
        $stmt->bindparam(5,$dto->getCreador());
        $stmt->bindparam(6,$dto->getCreador());
        $stmt->bindparam(7,$dto->getCreador());

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
        $query = "SELECT * FROM view_preguntas ORDER BY estado";
        $resultado=$this->conn->query($query);
        $result=null;
        foreach($resultado->fetchAll(PDO::FETCH_OBJ) AS $row){
            $newUser = new DtoPregunta($row->nro,$row->pregunta,$row->trabajo,$row->fechacreacion,$row->fecharespuesta,$row->respuesta,$row->estado,$row->creador);
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