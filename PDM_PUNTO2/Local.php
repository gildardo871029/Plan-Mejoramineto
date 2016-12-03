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
    public function precio()
    {
       $precioFinal=($this->getArea()*$this->precioM2);
    //    return$precioFinal;
    }
    public function muestra()
    {
        $infoObjeto=null;
        $infoObjeto="<br><h4>"."Tipo Inmueble: ".get_class($this)."</h4>";
        $infoObjeto=$infoObjeto."</br>"."Ubicado en :".$this->getUbicacion();
        $infoObjeto=$infoObjeto."</br>"."Area ocupada :".$this->getArea();
        $infoObjeto=$infoObjeto."</br>"."Nuevo/Usado :".$this->getEstado();
        $infoObjeto=$infoObjeto."</br>"."Precio metro Cuadrado :".$this->getPrecioM2();
        return $infoObjeto;

    }
    public  function toString()
    {
        $string="";
        $string=$string."Ubicacion: ".$this->getUbicacion().", ";
        $string=$string."Area: ".$this->getArea().", ";
        $string=$string."Estado: ".$this->getEstado().", ";
        $string=$string."PrecioM2: ".$this->getPrecioM2().", ";


        return $string;
    }


}