<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:15
 */
require_once("Inmueble.php");
abstract class Construccion extends Inmueble

{
    private $estado;
    public function __construct($wUbicacion, $wArea,$wEstado)
    {
        parent::__construct($wUbicacion, $wArea);
        $this->estado=$wEstado;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


}