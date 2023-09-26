<?php
require "../Models/gallito.model.php";
$gallito = new Gallito();

if(isset($_POST['btnGuardar'])){
	#echo "presionado";
	$volumenCrecidas         = $_POST['volumenCrecidas'];
	$nivelEmbalse            = $_POST['nivelEmbalse'];
	$volumenTotal            = $_POST['volumenTotal'];
	$volumenUtil             = $_POST['volumenUtil'];
	$caudalTotal             = $_POST['caudalTotal'];
	$ingresoMiraPaltas       = $_POST['ingresoMiraPaltas'];
	$ingresoCaudalPaltas     = $_POST['ingresoCaudalPaltas'];
	$ingresoMiraYonan        = $_POST['ingresoMiraYonan'];
	$ingresoCaudalYonan      = $_POST['ingresoCaudalYonan'];
	$salidaMiraE2            = $_POST['salidaMiraE2'];
	$salidaCaudalE2          = $_POST['salidaCaudalE2'];
	$salidaMiraMinicentral   = $_POST['salidaMiraMinicentral'];
	$salidaCaudalMinicentral = $_POST['salidaCaudalMinicentral'];
	$salidaMiraCGC           = $_POST['salidaMiraCGC'];
	$salidaCaudalCGC         = $_POST['salidaCaudalCGC'];
	$salidaMiraCTorta        = $_POST['salidaMiraCTorta'];
	$salidaCaudalCTorta      = $_POST['salidaCaudalCTorta'];
	$nivelEmbalseCompensacion= $_POST['nivelEmbalseCompensacion'];
	$volumenTotalEmbalse     = $_POST['volumenTotalEmbalse'];
	$aberturaComp1           = $_POST['aberturaComp1'];
	$caudalComp1             = $_POST['caudalComp1'];
	$aberturaComp2           = $_POST['aberturaComp2'];
	$caudalComp2             = $_POST['caudalComp2'];
	$caudalBypass            = $_POST['caudalBypass'];
	$idpersonal = 1000;

	$res = $gallito->Guardar($volumenCrecidas,$nivelEmbalse,$volumenTotal,$volumenUtil,$caudalTotal,$ingresoMiraPaltas,$ingresoCaudalPaltas,$ingresoMiraYonan,$ingresoCaudalYonan,$salidaMiraE2,$salidaCaudalE2,$salidaMiraMinicentral,$salidaCaudalMinicentral,$salidaMiraCGC,$salidaCaudalCGC,$salidaMiraCTorta,$salidaCaudalCTorta,$nivelEmbalseCompensacion,$volumenTotalEmbalse,$aberturaComp1,$caudalComp1,$aberturaComp2,$caudalComp2,$caudalBypass,$idpersonal);


		header("Location: ../public/resumen.php");
	/*if($res){
	}else{
		header("Location: ../public/error.php");
	}
	*/
}else{
	echo "No presiono";
}