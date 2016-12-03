<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 02/12/2016
 * Time: 23:38
 */
class DtoRol
{
    private $idRol;
    private $descripcion;


    public function __construct($wDescripcion)
    {
        $this->descripcion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdRol()
    {
        return $this->idRol;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }


}