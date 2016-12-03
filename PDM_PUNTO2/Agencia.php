<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:58
 */

class Agencia
{
    private $inmuebles;
    private $nombre;

    public function __construct($wNombre)
    {
        $this->nombre=$wNombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public  function agregarInmueble(Inmueble $inmueble){
        $this-> inmuebles[]=$inmueble;
    }

    public function getInmuebles()
    {
        return $this->inmuebles;
    }



}