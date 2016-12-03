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

    public function __construct($wUbicacion, $wArea, $wEstado,$wPrecio,$wCantHabitaciones,$wPiso)
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
}