<?php

class GallitoModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Guardar($hora,$volumenCrecidas,$nivelEmbalse,$volumenTotal,$volumenUtil,$caudalTotal,$ingresoMiraPaltas,$ingresoCaudalPaltas,$ingresoMiraYonan,$ingresoCaudalYonan,$salidaMiraE2,$salidaCaudalE2,$salidaMiraMinicentral,$salidaCaudalMinicentral,$salidaMiraCGC,$salidaCaudalCGC,$salidaMiraCTorta,$salidaCaudalCTorta,$nivelEmbalseCompensacion,$volumenTotalEmbalse,$aberturaComp1,$caudalComp1,$aberturaComp2,$caudalComp2,$idpersonal,$laminacionGallito)
  {
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO gallito VALUES (null,'$hora','$volumenCrecidas','$nivelEmbalse','$volumenTotal','$volumenUtil','$caudalTotal','$ingresoMiraPaltas','$ingresoCaudalPaltas','$ingresoMiraYonan','$ingresoCaudalYonan','$salidaMiraE2','$salidaCaudalE2','$salidaMiraMinicentral','$salidaCaudalMinicentral','$salidaMiraCGC','$salidaCaudalCGC','$salidaMiraCTorta','$salidaCaudalCTorta','$nivelEmbalseCompensacion','$volumenTotalEmbalse','$aberturaComp1','$caudalComp1','$aberturaComp2','$caudalComp2','$fecCreate','$idpersonal','$laminacionGallito');";
    if($res = $this->conn->ConsultaSin($sql))
    {
      return TRUE;
    }else{
      return FALSE;
    }

  }


  public function NombrePersonal($idpersonal)
  {
    $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE idpersonal = $idpersonal;";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
}
