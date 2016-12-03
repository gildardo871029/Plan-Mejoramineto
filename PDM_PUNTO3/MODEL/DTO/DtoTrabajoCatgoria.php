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
        $this->idTrabajoC=$widTrabajo;
        $this->idCategoria=$widCategoria;
        $this->descripcion=$wdescripcion;

    }

}