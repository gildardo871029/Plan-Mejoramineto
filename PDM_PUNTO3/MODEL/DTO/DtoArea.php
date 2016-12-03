<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:33
 */
class DtoArea
{
    private $idArea;
    private $descripcion;

    /**
     * DtoArea constructor.
     * @param $wIdArea int
     * @param $wDescripcion String
     */
    public function __construct($wIdArea,$wDescripcion)
    {
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdArea()
    {
        return $this->idArea;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;
    }


}