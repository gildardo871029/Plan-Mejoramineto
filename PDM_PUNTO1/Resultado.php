<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/11/2016
 * Time: 10:15
 */
class Resultado
{
    private $fecha;
    public function __construct( $wFecha)
    {
        $this->fecha=$wFecha;
    }



    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     *@return: boolean
     */
    public function ejecutoConError(){

    }

    /**
     *@return: boolean
     */
    public function ejecutarOk(){

    }

    /**
     *@return: void
     */
    public function ejecutoConAdvertencia(){

    }



}