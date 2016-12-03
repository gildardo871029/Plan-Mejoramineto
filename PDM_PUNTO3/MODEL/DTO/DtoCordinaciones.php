<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:41
 */
class DtoCordinaciones
{
private $idcordinaciones;
    private $idArea;
    private $idCordinador;
    private $fechaInicio;
    private $fechaFin;
    private $estado;

    /**
     * DtoCordinaciones constructor.
     * @param $widArea int
     * @param $widCordinador int
     * @param $idCordinador int
     * @param $wfechaInicio date
     * @param $wfechaFin date
     * @param $westado int
     */
    public function __construct($widArea,$widCordinador,$idCordinador,$wfechaInicio,$wfechaFin,$westado)
    {
        $this->idArea=$widArea;
        $this->estado=$this->estado;
        $this->fechaFin=$wfechaFin;
        $this->fechaInicio=$wfechaInicio;
        $this->idCordinador=$widCordinador;

    }

    public function getIdArea()
    {
        return $this->idArea;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    public function getIdcordinaciones()
    {
        return $this->idcordinaciones;
    }

    public function getIdCordinador()
    {
        return $this->idCordinador;
    }

    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }

    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    public function setIdcordinaciones($idcordinaciones)
    {
        $this->idcordinaciones = $idcordinaciones;
    }

    public function setIdCordinador($idCordinador)
    {
        $this->idCordinador = $idCordinador;
    }
}