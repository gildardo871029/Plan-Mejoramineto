<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:18
 */
require_once("Superficie.php");
require_once("Vender.php");

class Solar extends Superficie implements Vender
{
    /**
     * Solar constructor.
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

    public function muestra()
    {
        $infoObjeto=null;
        $infoObjeto="<br><h4>"."Tipo Inmueble: ".get_class($this)."</h4>";
        $infoObjeto=$infoObjeto."</br>"."Ubicado en :".$this->getUbicacion();
        $infoObjeto=$infoObjeto."</br>"."Area ocupada :".$this->getArea();
        $infoObjeto=$infoObjeto."</br>"."Precio metro Cuadrado:".$this->getPrecioM2();
        $infoObjeto=$infoObjeto."</br>"."Zona :".$this->getZona();
        $infoObjeto=$infoObjeto."</br>"."Valor Venta:".$this->getPrecioM2();
        return $infoObjeto;

    }
    public  function toString()
    {
        $string="";
        $string=$string."Ubicacion: ".$this->getUbicacion().", ";
        $string=$string."Area: ".$this->getArea().", ";
        $string=$string."PrecioM2: ".$this->getPrecioM2().", ";
        $string=$string."Zona: ".$this->getZona();


        return $string;
    }

}