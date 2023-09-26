<?php
require "../Models/valvulas.model.php";
$valvulas = new Valvulas();


if(isset($_POST['btnGuardar'])){
	echo "Boton presionado";
	$nivelEmbalse       = $_POST['nivelEmbalse'];
	$aberturaValvula    = $_POST['aberturaValvula'];
	$caudalValvula      = $_POST['caudalValvula'];
	$caudalTotalValvula = $_POST['caudalTotalValvula'];
	$aberturaValvula2   = $_POST['aberturaValvula2'];
	$caudalValvula2     = $_POST['caudalValvula2'];
	$miraAliviadero     = $_POST['miraAliviadero'];
	$embalseAliviadero  = $_POST['embalseAliviadero'];
	$idpersonal = 1000;

	$res = $valvulas->Guardar($nivelEmbalse,$aberturaValvula,$caudalValvula,$caudalTotalValvula,$aberturaValvula2,$caudalValvula2,$miraAliviadero,$embalseAliviadero,$idpersonal);

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