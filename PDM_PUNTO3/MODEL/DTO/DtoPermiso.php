<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 14:05
 */
class DtoPermiso
{
    private $idPernmiso;
    private $descripcion;
    private $url;
    private $rol;
    private $padre;
    private $hijo;

    public function __construct($widPernmiso,$wdescripcion,$wurl,$wrol,$wpadre,$whijo)
    {
        $this->descripcion=$wdescripcion;
        $this->hijo=$whijo;
        $this->idPernmiso=$widPernmiso;
        $this->padre=$wpadre;
        $this->rol=$wrol;
        $this->url=$wurl;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getHijo()
    {
        return $this->hijo;
    }

    public function getIdPernmiso()
    {
        return $this->idPernmiso;
    }

    public function getPadre()
    {
        return $this->padre;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setHijo($hijo)
    {
        $this->hijo = $hijo;
    }

    public function setIdPernmiso($idPernmiso)
    {
        $this->idPernmiso = $idPernmiso;
    }

    public function setPadre($padre)
    {
        $this->padre = $padre;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}