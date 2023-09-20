<?php
require "../Models/jequetepeque.model.php";
$jequetepeque = new Jequetepeque();

if(isset($_POST['btnGuardar'])){
	echo "Boton presionado";
	$alturamira               = $_POST['alturamira'];
	$nivelembalse             = $_POST['nivelembalse'];
	$ah1                      = $_POST['ah1'];
	$caudal1                  = $_POST['caudal1'];
	$ah2                      = $_POST['ah2'];
	$caudal2                  = $_POST['caudal2'];
	$ah3                      = $_POST['ah3'];
	$caudal3                  = $_POST['caudal3'];
	$caudalTotalCRadial       = $_POST['caudalTotalCRadial'];
	$ah4                      = $_POST['ah4'];
	$caudal4                  = $_POST['caudal4'];
	$miraCanalEntrada         = $_POST['miraCanalEntrada'];
	$ahCanalEntrada           = $_POST['ahCanalEntrada'];
	$caudalCanalEntrada       = $_POST['caudalCanalEntrada'];
	$caudalTotalCanalEntrada  = $_POST['caudalTotalCanalEntrada'];
	$ahCanalEntrada2          = $_POST['ahCanalEntrada2'];
	$caudalCanalEntrada2      = $_POST['caudalCanalEntrada2'];
	$miraRevestido            = $_POST['miraRevestido'];
	$caudalRevestido          = $_POST['caudalRevestido'];
	$canalAutorizadoRevestido = $_POST['canalAutorizadoRevestido'];
	$idpersonal = 1000;

	$res = $jequetepeque->Guardar($alturamira,$nivelembalse,$ah1,$caudal1,$ah2,$caudal2,$ah3,$caudal3,$caudalTotalCRadial,$ah4,$caudal4,$miraCanalEntrada,$ahCanalEntrada,$caudalCanalEntrada,$caudalTotalCanalEntrada,$ahCanalEntrada2,$caudalCanalEntrada2,$miraRevestido,$caudalRevestido,$canalAutorizadoRevestido,$idpersonal);

		header("Location: ../public/resumen.php");

	/*
	if($res == true){
		header("Location: ../public/error.php");
	}else{
	}
	*/
}else{
	echo "Boton No presionado";
}