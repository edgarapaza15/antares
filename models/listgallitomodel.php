<?php
include_once 'dataGallito.php';

class ListgallitoModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function ListadoGallito($fecInicial)
  {
    $items = [];

    $sql = "SELECT idgallito,hora,volumenCrecidas,nivelEmbalse,volumenTotal,volumenUtil,caudalTotal,ingresoMiraPaltas,ingresoCaudalPaltas,ingresoMiraYonan,ingresoCaudalYonan,salidaMiraE2,salidaCaudalE2,salidaMiraMinicentral,salidaCaudalMinicentral,salidaMiraCGC,salidaCaudalCGC,salidaMiraCTorta,salidaCaudalCTorta,nivelEmbalseCompensacion,volumenTotalEmbalse,aberturaComp1,caudalComp1,aberturaComp2,caudalComp2,idpersonal,laminacionGallito FROM gallito WHERE fecCreate LIKE '$fecInicial%';";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataGallito();

      $item->hora                     = $row['hora'];
      $item->volumenCrecidas          = $row['volumenCrecidas'];
      $item->nivelEmbalse             = $row['nivelEmbalse'];
      $item->volumenTotal             = $row['volumenTotal'];
      $item->volumenUtil              = $row['volumenUtil'];
      $item->caudalTotal              = $row['caudalTotal'];
      $item->ingresoMiraPaltas        = $row['ingresoMiraPaltas'];
      $item->ingresoCaudalPaltas      = $row['ingresoCaudalPaltas'];
      $item->ingresoMiraYonan         = $row['ingresoMiraYonan'];
      $item->ingresoCaudalYonan       = $row['ingresoCaudalYonan'];
      $item->salidaMiraE2             = $row['salidaMiraE2'];
      $item->salidaCaudalE2           = $row['salidaCaudalE2'];
      $item->salidaMiraMinicentral    = $row['salidaMiraMinicentral'];
      $item->salidaCaudalMinicentral  = $row['salidaCaudalMinicentral'];
      $item->salidaMiraCGC            = $row['salidaMiraCGC'];
      $item->salidaCaudalCGC          = $row['salidaCaudalCGC'];
      $item->salidaMiraCTorta         = $row['salidaMiraCTorta'];
      $item->salidaCaudalCTorta       = $row['salidaCaudalCTorta'];
      $item->nivelEmbalseCompensacion = $row['nivelEmbalseCompensacion'];
      $item->volumenTotalEmbalse      = $row['volumenTotalEmbalse'];
      $item->aberturaComp1            = $row['aberturaComp1'];
      $item->caudalComp1              = $row['caudalComp1'];
      $item->aberturaComp2            = $row['aberturaComp2'];
      $item->caudalComp2              = $row['caudalComp2'];
      $item->idpersonal               = $row['idpersonal'];
      $item->laminacionGallito        = $row['laminacionGallito'];

      array_push($items, $item);
    }

    return $items;

  }

  public function ListadoGallito2($fecInicial,$fecFinal)
  {
    $items = [];

    $sql = "SELECT idgallito,hora,volumenCrecidas,nivelEmbalse,volumenTotal,volumenUtil,caudalTotal,ingresoMiraPaltas,ingresoCaudalPaltas,ingresoMiraYonan,ingresoCaudalYonan,salidaMiraE2,salidaCaudalE2,salidaMiraMinicentral,salidaCaudalMinicentral,salidaMiraCGC,salidaCaudalCGC,salidaMiraCTorta,salidaCaudalCTorta,nivelEmbalseCompensacion,volumenTotalEmbalse,aberturaComp1,caudalComp1,aberturaComp2,caudalComp2,idpersonal,laminacionGallito FROM gallito WHERE fecCreate between '$fecInicial%' AND '$fecFinal%';";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataGallito();

      $item->hora                     = $row['hora'];
      $item->volumenCrecidas          = $row['volumenCrecidas'];
      $item->nivelEmbalse             = $row['nivelEmbalse'];
      $item->volumenTotal             = $row['volumenTotal'];
      $item->volumenUtil              = $row['volumenUtil'];
      $item->caudalTotal              = $row['caudalTotal'];
      $item->ingresoMiraPaltas        = $row['ingresoMiraPaltas'];
      $item->ingresoCaudalPaltas      = $row['ingresoCaudalPaltas'];
      $item->ingresoMiraYonan         = $row['ingresoMiraYonan'];
      $item->ingresoCaudalYonan       = $row['ingresoCaudalYonan'];
      $item->salidaMiraE2             = $row['salidaMiraE2'];
      $item->salidaCaudalE2           = $row['salidaCaudalE2'];
      $item->salidaMiraMinicentral    = $row['salidaMiraMinicentral'];
      $item->salidaCaudalMinicentral  = $row['salidaCaudalMinicentral'];
      $item->salidaMiraCGC            = $row['salidaMiraCGC'];
      $item->salidaCaudalCGC          = $row['salidaCaudalCGC'];
      $item->salidaMiraCTorta         = $row['salidaMiraCTorta'];
      $item->salidaCaudalCTorta       = $row['salidaCaudalCTorta'];
      $item->nivelEmbalseCompensacion = $row['nivelEmbalseCompensacion'];
      $item->volumenTotalEmbalse      = $row['volumenTotalEmbalse'];
      $item->aberturaComp1            = $row['aberturaComp1'];
      $item->caudalComp1              = $row['caudalComp1'];
      $item->aberturaComp2            = $row['aberturaComp2'];
      $item->caudalComp2              = $row['caudalComp2'];
      $item->idpersonal               = $row['idpersonal'];
      $item->laminacionGallito        = $row['laminacionGallito'];

      array_push($items, $item);
    }

    return $items;

  }

  public function ListadoGallitoMes($mes,$anio)
  {
    $items = [];

    $sql = "SELECT idgallito,hora,volumenCrecidas,nivelEmbalse,volumenTotal,volumenUtil,caudalTotal,ingresoMiraPaltas,ingresoCaudalPaltas,ingresoMiraYonan,ingresoCaudalYonan,salidaMiraE2,salidaCaudalE2,salidaMiraMinicentral,salidaCaudalMinicentral,salidaMiraCGC,salidaCaudalCGC,salidaMiraCTorta,salidaCaudalCTorta,nivelEmbalseCompensacion,volumenTotalEmbalse,aberturaComp1,caudalComp1,aberturaComp2,caudalComp2,idpersonal,laminacionGallito FROM gallito WHERE fecCreate between '$anio-$mes-01%' AND '$anio-$mes-31%';";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataGallito();

      $item->hora                     = $row['hora'];
      $item->volumenCrecidas          = $row['volumenCrecidas'];
      $item->nivelEmbalse             = $row['nivelEmbalse'];
      $item->volumenTotal             = $row['volumenTotal'];
      $item->volumenUtil              = $row['volumenUtil'];
      $item->caudalTotal              = $row['caudalTotal'];
      $item->ingresoMiraPaltas        = $row['ingresoMiraPaltas'];
      $item->ingresoCaudalPaltas      = $row['ingresoCaudalPaltas'];
      $item->ingresoMiraYonan         = $row['ingresoMiraYonan'];
      $item->ingresoCaudalYonan       = $row['ingresoCaudalYonan'];
      $item->salidaMiraE2             = $row['salidaMiraE2'];
      $item->salidaCaudalE2           = $row['salidaCaudalE2'];
      $item->salidaMiraMinicentral    = $row['salidaMiraMinicentral'];
      $item->salidaCaudalMinicentral  = $row['salidaCaudalMinicentral'];
      $item->salidaMiraCGC            = $row['salidaMiraCGC'];
      $item->salidaCaudalCGC          = $row['salidaCaudalCGC'];
      $item->salidaMiraCTorta         = $row['salidaMiraCTorta'];
      $item->salidaCaudalCTorta       = $row['salidaCaudalCTorta'];
      $item->nivelEmbalseCompensacion = $row['nivelEmbalseCompensacion'];
      $item->volumenTotalEmbalse      = $row['volumenTotalEmbalse'];
      $item->aberturaComp1            = $row['aberturaComp1'];
      $item->caudalComp1              = $row['caudalComp1'];
      $item->aberturaComp2            = $row['aberturaComp2'];
      $item->caudalComp2              = $row['caudalComp2'];
      $item->idpersonal               = $row['idpersonal'];
      $item->laminacionGallito        = $row['laminacionGallito'];

      array_push($items, $item);
    }

    return $items;

  }
}