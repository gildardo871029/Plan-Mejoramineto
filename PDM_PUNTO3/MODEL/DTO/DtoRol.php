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

    /**
     * DtoRol constructor.
     * @param $wDescripcion String
     */
    public function __construct($wDescripcion)
    {
        $this->descripcion;
    }

    /**
     * @return mixed String
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed int
     */
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * @param $descripcion String
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @param $idRol int
     */
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }


}