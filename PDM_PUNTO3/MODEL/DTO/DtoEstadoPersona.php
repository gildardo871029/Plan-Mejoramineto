<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:54
 */
class DtoEstadoPersona
{
    private $idEstado;
    private $descripcion;

    public function __construct($wIdestado,$wDescripcion)
    {
        $this->idEstado= $wIdestado;
        $this->descripcion= $wDescripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdEstado()
    {
        return $this->idEstado;
    }

    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }


}