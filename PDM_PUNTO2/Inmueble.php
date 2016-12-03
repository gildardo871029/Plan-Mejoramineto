<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:15
 */
abstract class Inmueble
{

    private $ubicacion;
    private $area;

    public function __construct( $wUbicacion,$wArea){
        $this->ubicacion=$wUbicacion;
        $this->area=$wArea;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }
}