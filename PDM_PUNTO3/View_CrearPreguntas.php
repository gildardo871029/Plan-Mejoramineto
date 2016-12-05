<?php

require_once("C:\\xampp\htdocs\PDM_PHP\PDM_PUNTO3\MODEL\DAO\DaoPreguntas.php");
require_once("C:\\xampp\htdocs\PDM_PHP\PDM_PUNTO3\MODEL\DTO\DtoPregunta.php");
include_once("MODEL/DAO/DaoTrabajoCatgoria.php");
include_once("MODEL/DTO/DtoTrabajoCatgoria.php");

//$dao->crear($dto);
//$d=new DtoEstadoPregunta(1,"actualizacion");
//$dao->actualizar($d);
//$dao->traerPorId(1);
//foreach($dao->traerPorId(1) as $c){
//  echo $c->getIdestado();
//echo $c->getDescripcion();
//}
$dpre= new DaoPreguntas();

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Preguntas</title>
    <link type="text/css" href="VIEW/src/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="VIEW/src/css/estilos.css" rel="stylesheet">
</head>

<body>
<header class="col col-lg-12 page-header">header</header>
    <div class="col col-lg-5 conta" id="areaFormulario">
        <h1>Preguntas</h1>

        <div class="col-lg-12 ">
            <form role="form" id="frmCrearPregunta" method="post" action="CONTROL/CtlCrearPregunta.php" >
                <h3 class="control-label">Crear Pregunta</h3>

                <div class="form-group">
                    <label for= "txtPregunta" class="control-label">Pregunta</label>
                    <textarea id="txtPregunta" name="txtPregunta" type="text" maxlength="200" required placeholder="Escribe tu pregunta aquí" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="cmbCategoria" class="control-label">Tipo de Trabajo</label>
                    <select id="cmbCategoria" name="cmbCategoria" class="form-control" >
                   ';

$dtt=new DaoTrabajoCatgoria();

foreach($dtt->traerTodos() as $t){
  echo '<option value="'.$t->getIdTrabajo().'">'.$t->getDescripcion().'</option>';
}


echo '</select>
                </div>

                <div class="form-group">
                    <input type="submit" value="Crear Pregunta" id="btnCrear" class="btn btn-success" name="btnCrear">

                </div>



            </form>

        </div>
    </div>
    <div class="col col-lg-7 conta" id="areaGrilla">
        <div class="col-lg-12" id="contGrilla">
            <div class="col-lg-12">
                <table class="table table-responsive col-lg-12">
                    <title>hola</title>
                    <thead>
                    <tr>
                        <th >Nro</th>
                        <th >Pregunta</th>
                        <th >Tipo de Trabajo</th>
                        <th >Fecha Creacion</th>
                        <th >Fecha Respuesta</th>
                        <th >Estado</th>

                    </tr>
                    </thead>
                    <tbody overflow: scroll;>
                    ';
foreach($dpre->traerTodos() AS $c){
    echo '<tr id="'.get_class($c).$c->getIdPregunta().'" name="'.get_class($c).$c->getIdPregunta().'">';
    echo    '<td >'.$c->getIdPregunta().'</td>';
    echo    '<td >'.$c->getPregunta().'</td>';
    echo    '<td >'.$c->getIdTipoTrabajo().'</td>';
    echo    '<td >'.$c->getFechaCreacion().'</td>';
    echo    '<td >'.$c->getFechaRespuesta().'</td>';
    echo    '<td >'.$c->getRespuesta().'</td>';
    echo    '<td >'.$c->getEstado().'</td>';
    echo '</tr>';
}
echo'
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
<footer class="col col-lg-12 page-header "> Elaborado por Gildardo Aguirre </footer>


</body>
</html>';