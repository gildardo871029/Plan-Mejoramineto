<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:57
 */
class DtoPregunta{
    private $idPregunta;
    private $pregunta;
    private $idTipoTrabajo;
    private $fechaCreacion;
    private $fechaRespuesta;
    private $respuesta;
    private $estado;
    private $creador;

    /**
     * DtoPregunta constructor.
     * @param $widPregunta int
     * @param $wpregunta String
     * @param $widTipoTrabajo int
     * @param $wfechaCreacion date
     * @param $wfechaRespuesta date
     * @param $wrespuesta String
     * @param $westado int
     * @param $wcreador int
     */
    public function __construct($widPregunta,$wpregunta,$widTipoTrabajo,$wfechaCreacion,$wfechaRespuesta,$wrespuesta,$westado,$wcreador)
    {
        $this->idPregunta=$widPregunta;
        $this->pregunta=$wpregunta;
        $this->idTipoTrabajo=$widTipoTrabajo;
        $this->fechaCreacion=$wfechaCreacion;
        $this->fechaRespuesta=$wfechaRespuesta;
        $this->respuesta=$wrespuesta;
        $this->estado=$westado;
        $this->creador=$wcreador;
    }

    public function getCreador()
    {
        return $this->creador;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getFechaRespuesta()
    {
        return $this->fechaRespuesta;
    }

    public function getIdPregunta()
    {
        return $this->idPregunta;
    }

    public function getIdTipoTrabajo()
    {
        return $this->idTipoTrabajo;
    }

    public function getPregunta()
    {
        return $this->pregunta;
    }

    public function getRespuesta()
    {
        return $this->respuesta;
    }

    public function setCreador($creador)
    {
        $this->creador = $creador;
    }

    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function setFechaRespuesta($fechaRespuesta)
    {
        $this->fechaRespuesta = $fechaRespuesta;
    }

    public function setIdPregunta($idPregunta)
    {
        $this->idPregunta = $idPregunta;
    }

    public function setIdTipoTrabajo($idTipoTrabajo)
    {
        $this->idTipoTrabajo = $idTipoTrabajo;
    }

    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;
    }

    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;
    }
}