<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:19
 */
require_once("Superficie.php");
require_once("Alquiler.php");
class Parqueadero extends Superficie implements Alquiler
{
    private $tipo;
    public function __construct($wUbicacion, $wArea, $wPrecioM2,$wTipo)
    {
        parent::__construct($wUbicacion, $wArea, $wPrecioM2);
        $this->tipo=$wTipo;

    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function alquilar()
    {
    }



}