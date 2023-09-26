<?php
require "../Models/talambo.model.php";
$talambo = new Talambo();

if(isset($_POST['btnGuardar'])){
	echo "Boton presionado";
	$compuerta4               = $_POST['compuerta4'];
	$compuerta5               = $_POST['compuerta5'];
	$compuerta6               = $_POST['compuerta6'];
	$miracompuertaTalambo     = $_POST['miracompuertaTalambo'];
	$caudalcompuertaTalambo   = $_POST['caudalcompuertaTalambo'];
	$compuerta1               = $_POST['compuerta1'];
	$compuerta2               = $_POST['compuerta2'];
	$compuerta3               = $_POST['compuerta3'];
	$miracompuertaGuadalupe   = $_POST['miracompuertaGuadalupe'];
	$caudalcompuertaGuadalupe = $_POST['caudalcompuertaGuadalupe'];
	$compu1                   = $_POST['compu1'];
	$compu2                   = $_POST['compu2'];
	$compu3                   = $_POST['compu3'];
	$compu4                   = $_POST['compu4'];
	$compu5                   = $_POST['compu5'];
	$compu6                   = $_POST['compu6'];
	$comptas                  = $_POST['comptas'];
	$miraRioJ                 = $_POST['miraRioJ'];
	$caudalRioJ               = $_POST['caudalRioJ'];
	$mirapez                  = $_POST['mirapez'];
	$caudalpez                = $_POST['caudalpez'];
	$miraEscLim               = $_POST['miraEscLim'];
	$caudalEscLim             = $_POST['caudalEscLim'];
	$miraBarraje              = $_POST['miraBarraje'];
	$caudalBarraje            = $_POST['caudalBarraje'];
	$idpersonal = 1000;

	$res = $talambo->Guardar($compuerta4,$compuerta5,$compuerta6,$miracompuertaTalambo,$caudalcompuertaTalambo,$compuerta1,$compuerta2,$compuerta3,$miracompuertaGuadalupe,$caudalcompuertaGuadalupe,$compu1,$compu2,$compu3,$compu4,$compu5,$compu6,$comptas,$miraRioJ,$caudalRioJ,$mirapez,$caudalpez,$miraEscLim,$caudalEscLim,$miraBarraje,$caudalBarraje,$idpersonal);

		header("Location: ../public/resumen.php");
	/*if($res == true){
		header("Location: ../public/error.php");
	}else{
	}
	*/
}else{
	echo "Boton No presionado";
}