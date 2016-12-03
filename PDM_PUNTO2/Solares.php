<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:18
 */
require_once("Superficie.php");
require_once("Vender.php");

class Solares extends Superficie implements Vender
{
    /**
     * Solares constructor.
     */
    private $zona;

    public function __construct($wUbicacion, $wArea, $wPrecioM2,$wZona)
{
    parent::__construct($wUbicacion, $wArea, $wPrecioM2);
    $this->zona=$wZona;
}


    public function getZona()
    {
        return $this->zona;
    }

    public function setZona($zona)
    {
        $this->zona = $zona;
    }

    public function vender()
    {
    }
}