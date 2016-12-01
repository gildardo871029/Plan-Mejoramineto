<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/11/2016
 * Time: 10:45
 */
require_once("Tarea.php");
require_once("Falla.php");
require_once("EstrategiaEjecucion.php");
require_once("EjecutarTodas.php");


class TareaCompuesta extends Tarea
{
    private $listaTareas;
    private $estrategia;


    /**
     * TareaCompuesta constructor.
     * @param $tareas -
     */
    public function __construct($wEstrategia)
    {
        $this->listaTareas= array();
        $this->estrategia=$wEstrategia;
        $this->crearEstrategia();
    }

    public function getEstrategia()
    {
        return $this->estrategia;
    }

    public function setEstrategia($estrategia)
    {
        $this->estrategia = $estrategia;
    }

    public function getListaTareas()
    {
        return $this->listaTareas;
    }

    public function setListaTareas($listaTareas)
    {
        $this->listaTareas = $listaTareas;
    }


    private function crearEstrategia(){

        switch(get_class($this->estrategia)){
            case "EjecutarTodas":
                $this->estrategia=new EjecutarTodas();
                break;
            case "CortarPorErrorOWarning":
                $this->estrategia=new EjecutarTodas();
                break;
            case "CortarPorErrorPrimeraTarea":
                $this->estrategia=new CortarPorErrorPrimeraTarea();
                break;
            case "CortarPorError":
                $this->estrategia=new CortarPorErrorPrimeraTarea();
                break;
            default:
                break;
        }


    }


    public function doEjecutar(Falla $falla)
    {
        $this->estrategia->ejecutar($falla);


    }

}