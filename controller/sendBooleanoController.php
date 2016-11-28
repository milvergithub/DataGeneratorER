<?php
/**
 * Created by PhpStorm.
 * User: milver
 * Date: 09-03-15
 * Time: 10:45 AM
 */
require_once "../model/writerReadDatesModel.php";
require_once "../model/GeneratorBooleanModel.php";
$generatorBoolean=new GeneratorBooleanModel();
$model=new writerReadDatesModel($_POST['proyecto']);

$datos=$generatorBoolean->getDatosBooleanos($_POST['cantidad'],$_POST['modo']);
$model->setProccessTabla($_POST['columna'],$datos,$_POST['tablaActual']);
$model->cambiarEstadoColumna($_POST['tablaActual'],$_POST['columna']);
$model->setCantidadDatosTabla($_POST['tablaActual'],$_POST['cantidad']);
echo "SUCCESSFULL...";