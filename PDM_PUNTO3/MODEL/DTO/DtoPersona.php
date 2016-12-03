<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 13:54
 */
class DtoPersona
{

    private $idPersona;
    private $nombres;
    private $apellidos;
    private $email;
    private $rol;
    private $contraseña;
    private $estado;

    /**
     * DtoPersona constructor.
     * @param $widPersona int
     * @param $wnombres string
     * @param $wapellidos string
     * @param $wemail string
     * @param $wrol int
     * @param $wcontraseña strint
     * @param $westado int
     */
    public function __construct($widPersona,$wnombres,$wapellidos,$wemail,$wrol,$wcontraseña,$westado)
    {
        $this->idPersona=$widPersona;
        $this->nombres=$wnombres;
        $this->apellidos=$wapellidos;
        $this->email=$wemail;
        $this->rol=$wrol;
        $this->contraseña=$wcontraseña;
        $this->estado=$westado;

    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getIdPersona()
    {
        return $this->idPersona;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

}