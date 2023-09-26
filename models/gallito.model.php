<?php
require "Conexion.php";

class Gallito
{

    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        return $this->conn;
    }

    function Duplicado()
    {
        $sql = "";
    }

    function Guardar($volumenCrecidas,$nivelEmbalse,$volumenTotal,$volumenUtil,$caudalTotal,$ingresoMiraPaltas,$ingresoCaudalPaltas,$ingresoMiraYonan,$ingresoCaudalYonan,$salidaMiraE2,$salidaCaudalE2,$salidaMiraMinicentral,$salidaCaudalMinicentral,$salidaMiraCGC,$salidaCaudalCGC,$salidaMiraCTorta,$salidaCaudalCTorta,$nivelEmbalseCompensacion,$volumenTotalEmbalse,$aberturaComp1,$caudalComp1,$aberturaComp2,$caudalComp2,$caudalBypass,$idpersonal)
    {
        $fecCreate = date('Y-m-d H:i:s');
        $sql = "INSERT INTO gallito VALUES (NULL,'$volumenCrecidas','$nivelEmbalse','$volumenTotal','$volumenUtil','$caudalTotal','$ingresoMiraPaltas','$ingresoCaudalPaltas','$ingresoMiraYonan','$ingresoCaudalYonan','$salidaMiraE2','$salidaCaudalE2','$salidaMiraMinicentral','$salidaCaudalMinicentral','$salidaMiraCGC','$salidaCaudalCGC','$salidaMiraCTorta','$salidaCaudalCTorta','$nivelEmbalseCompensacion','$volumenTotalEmbalse','$aberturaComp1','$caudalComp1','$aberturaComp2','$caudalComp2','$caudalBypass','$fecCreate','$idpersonal');";
        $this->conn->ConsultaSin($sql);

    }
}
