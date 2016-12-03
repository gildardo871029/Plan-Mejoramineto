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
require_once("Solar.php");
require_once("Parqueadero.php");
//agencias
$a= new Agencia("sena");

//
$a->añadirVentaInmueble(new Vivienda("soacha",100,"nueva",1500000,3,7));
$a->añadirVentaInmueble(new Vivienda("San Mateo",80,"nueva",3500000,2,1));
$a->añadirVentaInmueble(new Vivienda("San Mateo",200,"usada",1000000,2,1));

$a->añadirVentaInmueble(new Solar("Boyaca",300,1000000,"rustico"));
$a->añadirVentaInmueble(new Solar("Cundinamarca",100,400000,"urbano"));
$a->añadirVentaInmueble(new Solar("Cundinamarca",1000,500000,"urbano"));
//
$a->añadirAlquilerInmueble(new Local("Centro Comercial Calima",20,"nuevo",1000000));
$a->añadirAlquilerInmueble(new Local("Centro Comercial Calima",20,"usado",1000000));
$a->añadirAlquilerInmueble(new Local("Centro Comercial Unisur",300,"usado",800000));
$a->añadirAlquilerInmueble(new Local("Centro Comercial Unicentro",100,"usado",2000000));

$a->añadirAlquilerInmueble(new Parqueadero("Chia",40,1000000,"privado"));
$a->añadirAlquilerInmueble(new Parqueadero("Chapinero",20,100000,"publico"));
$a->añadirAlquilerInmueble(new Parqueadero("Centro Internacional",40,1000000,"privado"));
$a->añadirAlquilerInmueble(new Parqueadero("Centro Comercial santa fe",20,100000,"publico"));

echo "Ventas : ".sizeof($a->getVentas())."<br>";
echo "Alquileres : ".sizeof($a->getAlquileres())."<br>";
echo "<h2>inmueblesVenta(2.000.000)</h2>";
foreach($a->inmueblesVenta(2000000) as $e){
  echo $e->muestra();
}

echo "<h2>localesSegundaMano(2.000.000)</h2>";
$a->localesSegundaMano(80);

echo "<h2>solaresRusticos()</h2>";
echo "Total Solares Rusticos: ". $a->solaresRusticos();

//fusion de Agencias
$a1= new Agencia("Sena 1");

$a1->añadirVentaInmueble(new Vivienda("soacha",120,"nueva",1500000,3,7));
$a1->añadirVentaInmueble(new Vivienda("San Mateo",180,"nueva",3500000,2,1));
$a1->añadirVentaInmueble(new Vivienda("San Mateo",20,"usada",1000000,2,1));

$a1->añadirVentaInmueble(new Solar("Boyaca",30,1000000,"rustico"));
$a1->añadirVentaInmueble(new Solar("Cundinamarca",100,500000,"urbano"));
//
$a1->añadirAlquilerInmueble(new Local("Centro Comercial plaza",50,"nuevo",1000000));
$a1->añadirAlquilerInmueble(new Local("Centro Comercial mayor",60,"usado",1000000));
$a1->añadirAlquilerInmueble(new Local("Centro Comercial usme",10,"usado",2000000));

$a1->añadirAlquilerInmueble(new Parqueadero("Cota",40,1000000,"privado"));
$a1->añadirAlquilerInmueble(new Parqueadero("Venecia",20,100000,"publico"));


echo "<h2>Fusion</h2>";
echo $a->getNombre()."  Total ventas: ".sizeof($a->getVentas())."<br>";
echo $a->getNombre()."  Total Alquileres: ".sizeof($a->getAlquileres())."<br>";
echo "--------------------------------------------------------<br>";
echo $a1->getNombre()."  Total ventas: ".sizeof($a1->getVentas())."<br>";
echo $a1->getNombre()."  Total Alquileres: ".sizeof($a1->getAlquileres())."<br>";
echo "--------------------------------------------------------<br>";
$a->fusion($a1);

echo $a->getNombre()."  Total ventas: ".sizeof($a->getVentas())."<br>";
echo $a->getNombre()."  Total Alquileres: ".sizeof($a->getAlquileres())."<br>";







