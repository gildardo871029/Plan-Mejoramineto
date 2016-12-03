<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:15
 */
abstract class Inmueble
{

    private $ubicacion;
    private $area;

    public function __construct( $wUbicacion,$wArea){
        $this->ubicacion=$wUbicacion;
        $this->area=$wArea;
    }
//getter y setter
    public function getArea()
    {
        return $this->area;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }
//metodos

    public  function precio(){
        return "accion no definida";
    }

    public function muestra(){}
    public function toString(){}

    /**
     * @param $inmueble
     */
    public function equals($inmueble ){
        $iguales=false;
        if((strcmp(get_class($this),get_class($inmueble))==0)){

                if($this->toString()==$inmueble->toString()){
                    $iguales=true;
                }
        }else{

        }
        return $iguales;
    }


}
