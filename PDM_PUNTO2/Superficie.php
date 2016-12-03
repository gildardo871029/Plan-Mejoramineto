<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:17
 */
require_once("Inmueble.php");
abstract class Superficie extends Inmueble
{

    private $precioM2;


    public function __construct($wUbicacion, $wArea,$wPrecioM2)
    {
        parent::__construct($wUbicacion, $wArea);
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

    public function precio(){

        $precioFinal=($this->getArea()*$this->precioM2);
        return$precioFinal;

    }

}