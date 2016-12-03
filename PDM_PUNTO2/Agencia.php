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
    private $ventas;
    private $alquileres;
    private $nombre;

    /**
     * Agencia constructor.
     * @param $wNombre String
     */
    public function __construct($wNombre)
    {
        $this->nombre=$wNombre;
        $this->alquileres=array();
        $this->ventas=array();
    }

    /**
     * @return String
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param $nombre String
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param $agenciSocia Agencia
     */
    public function fusion($agenciSocia){

        if(get_class($this)==get_class($agenciSocia)){
            $v=$agenciSocia->getVentas();
            $a=$agenciSocia->getAlquileres();

            foreach($v as $venta){
                $this->añadirVentaInmueble($venta);
                }
            foreach($a as $alquiler){
                $this->añadirAlquilerInmueble($alquiler);
            }
        }


    }

    /**
     * @param $agencia2 Agencia
     * @return bool Agencia
     */
    public function equals($agencia2){
        $iguales=false;
        if((strcmp(get_class($this),get_class($agencia2))==0)){
            echo "objetos iguales Agencia";
            if($this->toString()==$agencia2->toString()){
                $iguales=true;
            }
        }else{
            echo "objetos diferentes";
        }
        return $iguales;
    }

    /**
     * @return string
     */
    public  function toString()
    {
        $string="";
        $string=$string."nombre: ".$this->getNombre().", ";
        return $string;
    }

    /**
     * @param $wInmueble Inmueble
     */
    public function añadirVentaInmueble($wInmueble){
        if(get_class($wInmueble)=="Vivienda" || get_class($wInmueble)=="Solar"  ){
            $wExiste=false;
            foreach($this->ventas as $inmu){
                if($inmu->equals($wInmueble)){
                    $wExiste=true;

                }
            }
            if($wExiste){
                echo "<br>Venta ya Registrado";

            }else{
                $this->ventas[]=$wInmueble;
            }
        }else{
            echo "no es un objeto permitido";

        }
    }

    /**
     * @param $wInmueble Inmueble
     */
    public function añadirAlquilerInmueble($wInmueble){
        if(get_class($wInmueble)=="Parqueadero" || get_class($wInmueble)=="Local"  ){
            $wExiste=false;
            foreach($this->alquileres as $inmu){
                if($inmu->equals($wInmueble)){
                    $wExiste=true;

                }
            }
            if($wExiste){
                echo "<br>Alquiler ya Registrado";

            }else{
                $this->alquileres[]=$wInmueble;
            }


        }else{
            echo "no es un objeto permitido";

        }
    }

    /**
     * @param $precio
     */
    public function inmueblesVenta($precio){
        $vector=null;
        foreach($this->ventas as $inmueble){

            if($inmueble->precio() < $precio){
                $vector[]=$inmueble;

            }

        }
        return $vector;
    }

    /**
     * @param $wArea Area
     */
    public function localesSegundaMano($wArea){


            foreach ($this->alquileres as $inmueble) {
                if(get_class($inmueble)=="Local") {

                    if ($inmueble->getArea()> $wArea) {

                            if($inmueble->getEstado()=="usado"){
                                echo $inmueble->muestra();
                            }

                    }

                }
            }
    }

    /**
     * @return int
     */
    public function solaresRusticos(){
        $totalRusticos=0;

                foreach($this->ventas as $inmu){
                    if(get_class($inmu)=="Solar"){
                        if($inmu->getZona()== "rustico"){
                            $totalRusticos=$totalRusticos+1;
                        }
                    }

                }
        return $totalRusticos;
    }

    /**
     * @return array
     */
    public function getVentas()
    {
        return $this->ventas;
    }

    /**
     * @return array
     */
    public function getAlquileres()
    {
        return $this->alquileres;
    }
}