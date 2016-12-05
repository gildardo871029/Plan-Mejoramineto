<?php

/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 04/12/2016
 * Time: 15:48
 */

include_once("../MODEL/DTO/DtoPregunta.php");
require_once("../MODEL/DAO/DaoPreguntas.php");

$pregunta=$_POST["txtPregunta"];
$categoria=$_POST['cmbCategoria'];
$_SESSION['USER']=1010;
$dto=new DtoPregunta(0,$pregunta,$categoria,'','','',1,2);
$dao=new DaoPreguntas();
$dto->setCreador($_SESSION['USER']);
$dao->crear($dto);
header("location:View_CrearPreguntas.php");


//$dto=new DtoPregunta(0,)
//$dao=new DaoPreguntas();

