<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 15:34
 */
class DtoTrabajoCatgoria
{
    private $idTrabajo;
    private $idCategoria;
    private $descripcion;
    public function __construct($widTrabajo,$widCategoria,$wdescripcion)
    {
        $this->idTrabajo=$widTrabajo;
        $this->idCategoria=$widCategoria;
        $this->descripcion=$wdescripcion;

    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function getIdTrabajo()
    {
        return $this->idTrabajo;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }

    public function setIdTrabajo($idTrabajo)
    {
        $this->idTrabajo = $idTrabajo;
    }


}