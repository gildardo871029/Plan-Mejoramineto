<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 03/12/2016
 * Time: 15:38
 */
interface DaoInterface
{
    public function crear($dto);
    public function actualizar($dto);
    public function traerTodos();
    public function traerPorId($id);
    public function eliminar($id);


}