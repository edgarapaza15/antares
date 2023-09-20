<?php
require "Conexion.php";

class Valvulas
{

    private $conn;

    function __construct()
    {
        $this->conn = new Conexion();
        #return $this->conn;
    }


    function Guardar($nivelEmbalse,$aberturaValvula,$caudalValvula,$caudalTotalValvula,$aberturaValvula2,$caudalValvula2,$miraAliviadero,$embalseAliviadero,$idpersonal)
    {
        $fecCreate = date('Y-m-d H:i:s');
        $sql = "INSERT INTO valvulas VALUES (NULL,'$nivelEmbalse','$aberturaValvula','$caudalValvula','$caudalTotalValvula','$aberturaValvula2','$caudalValvula2','$miraAliviadero','$embalseAliviadero','$fecCreate','$idpersonal');";
        $data = $this->conn->ConsultaSin($sql);
    }

    function Update()
    {
    }
    function Read()
    {
    }
    function Delete()
    {
    }
}
