<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 04/12/2016
 * Time: 6:32
 */
require_once("../DAO/DaoEstadoPregunta.php");
class FacEstadoPregunta
{
    private $dao;
    public function __construct()
    {
        $this->dao= new DaoEstadoPregunta();
    }

    /**
     * @param DtoEstadoPregunta $dto
     */
    public function crear(DtoEstadoPregunta $dto){
        $this->dao->crear($dto);

    }

}