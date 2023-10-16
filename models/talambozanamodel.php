<?php

class TalambozanaModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Guardar($hora,$nivelembalse1,$compuerta4,$compuerta5,$compuerta6,$miracompuertaTalambo,$caudalcompuertaTalambo,$compuerta1,$compuerta2,$compuerta3,$miracompuertaGuadalupe,$caudalcompuertaGuadalupe,$compu1,$compu2,$compu3,$compu4,$compu5,$compu6,$comptas,$mirapez,$caudalpez,$miraEscLim,$caudalEscLim,$miraBarrajo,$caudalBarrajo,$miraTalamboG,$caudalTalambozana,$salidaTalambo,$idpersonal)
  {
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO talambozana VALUES (null,'$hora','$nivelembalse1','$compuerta4','$compuerta5','$compuerta6','$miracompuertaTalambo','$caudalcompuertaTalambo','$compuerta1','$compuerta2','$compuerta3','$miracompuertaGuadalupe','$caudalcompuertaGuadalupe','$compu1','$compu2','$compu3','$compu4','$compu5','$compu6','$comptas','$mirapez','$caudalpez','$miraEscLim','$caudalEscLim','$miraBarrajo','$caudalBarrajo','$fecCreate','$miraTalamboG','$caudalTalambozana','$salidaTalambo','$idpersonal');";
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
