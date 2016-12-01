<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/11/2016
 * Time: 9:58
 */
require_once("Falla.php");
    interface EstrategiaEjecucion
{
        /**
         * @param Falla $fallas
         * @return mixed
         */
        public function ejecutar($fallas);


}