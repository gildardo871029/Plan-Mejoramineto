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

    public function muestra()
    {
        $infoObjeto=null;
        $infoObjeto="<br><h4>"."Tipo Inmueble: ".get_class($this)."</h4>";
        $infoObjeto=$infoObjeto."</br>"."Ubicado en :".$this->getUbicacion();
        $infoObjeto=$infoObjeto."</br>"."Area ocupada :".$this->getArea();
        $infoObjeto=$infoObjeto."</br>"."Publico/privado: ".$this->getTipo();
        $infoObjeto=$infoObjeto."</br>"."Precio metro Cuadrado: ".$this->getPrecioM2();
        $infoObjeto=$infoObjeto."</br>"."Valor Venta: ".$this->getPrecioM2();
        return $infoObjeto;

    }

    public  function toString()
    {
        $string="";
        $string=$string."Ubicacion: ".$this->getUbicacion().", ";
        $string=$string."Area: ".$this->getArea().", ";
        $string=$string."Tipo: ".$this->getTipo().", ";
        $string=$string."PrecioM2: ".$this->getPrecioM2().", ";


        return $string;
    }


}