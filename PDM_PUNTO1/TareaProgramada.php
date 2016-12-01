<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/11/2016
 * Time: 11:00
 */
require_once("Tarea.php");
class TareaProgramada
{
    private $tarea;

    /**
     * TareaProgramada constructor.
     * @param Tarea $wTarea
     */
    public function __construct(Tarea $wTarea)
    {
        $this->tarea=$wTarea;
    }

    /**
     * @return: boolean
     */
    public function correspondeEjecutar(){}
    /**
     * @return: void
     */
    public function ejecutar(){}

    public function getTarea()
    {
        return $this->tarea;
    }

    public function setTarea($tarea)
    {
        $this->tarea = $tarea;
    }

}