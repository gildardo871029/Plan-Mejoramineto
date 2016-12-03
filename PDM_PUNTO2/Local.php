<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:21
 */
require_once("Construccion.php");
require_once("Alquiler.php");
class Local extends Construccion implements Alquiler
{
    private $precioM2;
    public function __construct($wUbicacion, $wArea, $wEstado,$wPrecioM2)
    {
        parent::__construct($wUbicacion, $wArea, $wEstado);
        $this->precioM2=$wPrecioM2;
    }

    public function getPrecioM2()
    {
        return $this->precioM2;
    }

    public function setPrecioM2($precioM2)
    {
        $this->precioM2 = $precioM2;
    }
    public function alquilar()
    {
    }

}