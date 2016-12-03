<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:49
 */
class DtoEstadoCordinacion
{
    private $idestado;
    private $descripcion;

    public function __construct($widestado,$descripcion)
    {
        $this->idestado=$widestado;
        $this->descripcion=$descripcion;

    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdestado()
    {
        return $this->idestado;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setIdestado($idestado)
    {
        $this->idestado = $idestado;
    }

}