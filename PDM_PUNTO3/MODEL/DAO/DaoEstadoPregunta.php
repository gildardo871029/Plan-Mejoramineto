<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 15:37
 */
require_once("DaoInterface.php");
require_once("../../SERVICES/Conexion.php");
class DaoEstadoPregunta implements DaoInterface
{
    private $conexion;
    public function __construct()
    {
        $this->conexion=new Conexion();
    }

    public function crear()
    {
        // TODO: Implement crear() method.
    }

    public function actualizar()
    {
        // TODO: Implement actualizar() method.
    }

    public function traerTodos()
    {
        // TODO: Implement traerTodos() method.
    }

    public function traerPorId()
    {
        // TODO: Implement traerPorId() method.
    }

    public function eliminar()
    {
        // TODO: Implement eliminar() method.
    }
}