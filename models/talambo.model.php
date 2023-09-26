<?php
require "Conexion.php";

class Talambo
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

    function Guardar($compuerta4,$compuerta5,$compuerta6,$miracompuertaTalambo,$caudalcompuertaTalambo,$compuerta1,$compuerta2,$compuerta3,$miracompuertaGuadalupe,$caudalcompuertaGuadalupe,$compu1,$compu2,$compu3,$compu4,$compu5,$compu6,$comptas,$miraRioJ,$caudalRioJ,$mirapez,$caudalpez,$miraEscLim,$caudalEscLim,$miraBarraje,$caudalBarraje,$idpersonal)
    {
        $fecCreate = date('Y-m-d H:i:s');
        $sql = "INSERT INTO talambozana VALUES (NULL,'$compuerta4','$compuerta5','$compuerta6','$miracompuertaTalambo','$caudalcompuertaTalambo','$compuerta1','$compuerta2','$compuerta3','$miracompuertaGuadalupe','$caudalcompuertaGuadalupe','$compu1','$compu2','$compu3','$compu4','$compu5','$compu6','$comptas','$miraRioJ','$caudalRioJ','$mirapez','$caudalpez','$miraEscLim','$caudalEscLim','$miraBarraje','$caudalBarraje','$fecCreate','$idpersonal');";
        $this->conn->ConsultaSin($sql);
    }
}
