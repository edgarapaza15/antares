<?php

class ValvulasModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Guardar($hora, $nivelEmbalse, $aberturaValvula, $caudalValvula, $caudalTotalValvula, $aberturaValvula2, $caudalValvula2, $miraAliviadero, $embalseAliviadero, $idpersonal)
  {
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO valvulas VALUES (null,'$hora','$nivelEmbalse','$aberturaValvula','$caudalValvula','$caudalTotalValvula','$aberturaValvula2','$caudalValvula2','$miraAliviadero','$embalseAliviadero','$fecCreate','$idpersonal');";
    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }


  public function NombrePersonal($idpersonal)
  {
    $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE idpersonal = $idpersonal;";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
}
