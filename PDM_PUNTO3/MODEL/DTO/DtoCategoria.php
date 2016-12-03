<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:37
 */
class DtoCategoria
{
private $idCategoria;
private $idArea;
private $descripcion;

    /**
     * DtoCategoria constructor.
     * @param $idCategoria int
     * @param $idArea int
     * @param $descripcion String
     */
    public function __construct($wIdCategoria,$idArea,$descripcion)
    {
        $this->idCategoria=$wIdCategoria;
        $this->idArea=$idArea;
        $this->descripcion= $descripcion;

    }


    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getIdArea()
    {
        return $this->idArea;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }


}