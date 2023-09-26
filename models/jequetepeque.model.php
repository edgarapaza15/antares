<?php
require "Conexion.php";

class Jequetepeque
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

    function Guardar($alturamira,$nivelembalse,$ah1,$caudal1,$ah2,$caudal2,$ah3,$caudal3,$caudalTotalCRadial,$ah4,$caudal4,$miraCanalEntrada,$ahCanalEntrada,$caudalCanalEntrada,$caudalTotalCanalEntrada,$ahCanalEntrada2,$caudalCanalEntrada2,$miraRevestido,$caudalRevestido,$canalAutorizadoRevestido,$idpersonal)
    {
        $fecCreate = date('Y-m-d H:i:s');
        $sql = "INSERT INTO jequetepeque VALUES (NULL,'$alturamira','$nivelembalse','$ah1','$caudal1','$ah2','$caudal2','$ah3','$caudal3','$caudalTotalCRadial','$ah4','$caudal4','$miraCanalEntrada','$ahCanalEntrada','$caudalCanalEntrada','$caudalTotalCanalEntrada','$ahCanalEntrada2','$caudalCanalEntrada2','$miraRevestido','$caudalRevestido','$canalAutorizadoRevestido','$fecCreate','$idpersonal');";
        $this->conn->ConsultaSin($sql);
    }
}
