<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/11/2016
 * Time: 11:22
 */
require_once("TareaProgramada.php");
class TaskScheduler
{
    private $tareasProgramadas;

    /**
     * TaskScheduler constructor.
     * @param $wTareas
     */
    public function __construct()
    {
        $this->tareasProgramadas= array();

    }

    public function getTareasProgramadas()
    {
        return $this->tareasProgramadas;
    }

    public function setTareasProgramadas($tareasProgramadas)
    {
        $this->tareasProgramadas = $tareasProgramadas;
    }

    /**
     * @return: void
     */
    public function tic(){}

    /**
     * @return: void
     */
    public function add(){}

}