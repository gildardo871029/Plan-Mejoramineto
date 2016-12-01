<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/11/2016
 * Time: 10:15
 */
require_once("Resultado.php");
class Tarea
{
    private $resultados;
    private $Tareas;
    private $habilitada;
    private $desHabilitarSifalla;

    /**
     * Tarea constructor.
     * @param Resultado $resultado
     */
        public function __construct()
    {
    $this->resultados=array();

    }

    public function getResultados()
    {
        return $this->resultados;
    }

    public function setResultados($resultados)
    {
        $this->resultados = $resultados;
    }

    public function getTareas()
    {
        return $this->Tareas;
    }

    public function setTareas($Tareas)
    {
        $this->Tareas = $Tareas;
    }
    public function getDesHabilitarSifalla()
    {
        return $this->desHabilitarSifalla;

    }

    public function getHabilitada()
    {
        return $this->habilitada;
    }

    public function setDesHabilitarSifalla($desHabilitarSifalla)
    {
        $this->desHabilitarSifalla = $desHabilitarSifalla;
    }

    public function setHabilitada($habilitada)
    {
        $this->habilitada = $habilitada;
    }

    /**
     * @return: void
     */
    public function ejecutar(){}

    /**
     * @return: void
     */
    public function doEjecutar(){}

    /**
     * @return: Date
     */
    public function ultimaEjecucion(){}

    /**
     * @return: void
     */
    public function vecesQueSeEjecuto(DateTime $fechaInicio,DateTime $fechaFin){}

    /**
     * @return: void
     */
    public function vecesQueDioError(DateTime $fechaInicio,DateTime $fechaFin){}



}