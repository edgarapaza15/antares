<?php

class JequetepequeModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Guardar($hora, $alturamira, $nivelembalse, $ah1, $caudal1, $ah2, $caudal2, $ah3, $caudal3, $ah4, $caudal4, $caudalTotalCRadial, $miraCanalEntrada, $ahCanalEntrada, $caudalCanalEntrada, $ahCanalEntrada2, $caudalCanalEntrada2, $caudalTotalCanalEntrada, $miraRevestido, $caudalRevestido, $canalAutorizadoRevestido, $idpersonal)
  {
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO jequetepeque VALUES (null,'$hora','$alturamira','$nivelembalse','$ah1','$caudal1','$ah2','$caudal2','$ah3','$caudal3','$ah4','$caudal4','$caudalTotalCRadial','$miraCanalEntrada','$ahCanalEntrada','$caudalCanalEntrada','$ahCanalEntrada2','$caudalCanalEntrada2','$caudalTotalCanalEntrada','$miraRevestido','$caudalRevestido','$canalAutorizadoRevestido','$fecCreate','$idpersonal');";
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
