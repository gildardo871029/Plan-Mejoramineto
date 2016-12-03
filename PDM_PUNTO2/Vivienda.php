<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:22
 */
require_once("Construccion.php");
require_once("Vender.php");
class Vivienda extends Construccion implements Vender
{
    private $precio;
    private $cantHabitaciones;
    private $Piso;

    /**
     * Vivienda constructor.
     * @param $wUbicacion string
     * @param $wArea metros cuadrados
     * @param $wEstado nueva-usada
     * @param $wPrecio precio de la vivienda
     * @param $wCantHabitaciones nro Habitaciones
     * @param $wPiso ubicación
     */
    public function __construct($wUbicacion, $wArea, $wEstado, $wPrecio, $wCantHabitaciones, $wPiso)
    {
        parent::__construct($wUbicacion, $wArea, $wEstado);
        $this->cantHabitaciones=$wCantHabitaciones;
        $this->precio=$wPrecio;
        $this->Piso=$wPiso;
    }
    public function getCantHabitaciones()
    {
        return $this->cantHabitaciones;
    }

    public function getPiso()
    {
        return $this->Piso;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setCantHabitaciones($cantHabitaciones)
    {
        $this->cantHabitaciones = $cantHabitaciones;
    }

    public function setPiso($Piso)
    {
        $this->Piso = $Piso;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function vender()
    {
    }
    public function precio(){
        return $this->precio;
    }

    /**
     * @return string
     */
    public function muestra()
    {
        $infoObjeto=null;
        $infoObjeto="<br><h4>Tipo Inmueble: ".get_class($this)."</h4>";
        $infoObjeto=$infoObjeto."Ubicado en :".$this->getUbicacion();
        $infoObjeto=$infoObjeto."<br>Piso; ".$this->getPiso();
        $infoObjeto=$infoObjeto."</br>Nro Habitaciones: ".$this->getCantHabitaciones();
        $infoObjeto=$infoObjeto."</br>Precio: $".$this->precio();
        return $infoObjeto."</br>";
    }

    public  function toString()
    {
        $string="";
        $string=$string."Ubicacion: ".$this->getUbicacion().", ";
        $string=$string."Area: ".$this->getArea().", ";
        $string=$string."Estado: ".$this->getEstado().", ";
        $string=$string."Precio: ".$this->getPrecio().", ";
        $string=$string."CantHabitaciones: ".$this->getCantHabitaciones().", ";
        $string=$string."Piso: ".$this->getPiso();
        return $string;
    }

}