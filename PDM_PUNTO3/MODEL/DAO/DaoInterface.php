<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 15:38
 */
interface DaoInterface
{
    public function crear();
    public function actualizar();
    public function traerTodos();
    public function traerPorId();
    public function eliminar();


}