<?php

class Resumen extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function ResumenGallito()
  {
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "SELECT idgallito,hora,volumenCrecidas,nivelEmbalse,volumenTotal,volumenUtil,caudalTotal,ingresoMiraPaltas,ingresoCaudalPaltas,ingresoMiraYonan,ingresoCaudalYonan,salidaMiraE2,salidaCaudalE2,salidaMiraMinicentral,salidaCaudalMinicentral,salidaMiraCGC,salidaCaudalCGC,salidaMiraCTorta,salidaCaudalCTorta,nivelEmbalseCompensacion,volumenTotalEmbalse,aberturaComp1,caudalComp1,aberturaComp2,caudalComp2,fecCreate,idpersonal,laminacionGallito FROM gallito;";
    $res = $this->conn->ConsultaCon($sql);
    return $res;
  }


  public function NombrePersonal($idpersonal)
  {
    $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE idpersonal = $idpersonal;";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
}

$resumen = new Resumen();
$resum = $resumen->ResumenGallito();
while ($row = $resum->fetch_array(MYSQLI_ASSOC)) {
  echo $row['hora'];
  echo $row['volumenCrecidas'];
  echo $row['nivelEmbalse'];
  echo $row['volumenTotal'];
  echo $row['volumenUtil'];
  echo $row['caudalTotal'];
}
