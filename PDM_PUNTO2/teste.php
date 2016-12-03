<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 01/12/2016
 * Time: 19:25
 */
require_once("Vivienda.php");
require_once("Agencia.php");
require_once("Local.php");
require_once("Agencia.php");
require_once("Solares.php");
require_once("Parqueadero.php");

$a= new Agencia("sena");


$a->agregarInmueble(new Vivienda(1,2,3,4,5,"primer"));
$a->agregarInmueble(new Local("soacha","Peligrosa","Nueva",1000000));
$a->agregarInmueble(new Solares("kenedy",100,2000000,"segura"));
$a->agregarInmueble(new Parqueadero("Chia","segura",1000,"privado"));
foreach($a->getInmuebles() as $i){
    echo $i->getArea()."</br>";
}




