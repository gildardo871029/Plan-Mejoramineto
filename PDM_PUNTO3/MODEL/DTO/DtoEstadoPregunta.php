<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:58
 */
class DtoEstadoPregunta
{
    private $idEstado;
    private $descripcion;

    public function __construct($wIdEstado,$wDescripcion)
    {
        $this->idEstado=$wIdEstado;
        $this->descripcion=$wDescripcion;
    }

    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdEstado()
    {
        return $this->idEstado;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}