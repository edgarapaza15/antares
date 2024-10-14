<?php
include_once 'dataValvulas.php';

class ListvalvulasModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function ListadoValvulasOld()
  {
    $items = [];

    $sql = "SELECT idvalvulas,hora,nivelEmbalse,aberturaValvula,caudalValvula,caudalTotalValvula,aberturaValvula2,caudalValvula2,miraAliviadero,embalseAliviadero,fecCreate,idpersonal FROM valvulas;";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataValvulas();

      $item->hora               = $row['hora'];
      $item->nivelEmbalse       = $row['nivelEmbalse'];
      $item->aberturaValvula    = $row['aberturaValvula'];
      $item->caudalValvula      = $row['caudalValvula'];
      $item->caudalTotalValvula = $row['caudalTotalValvula'];
      $item->aberturaValvula2   = $row['aberturaValvula2'];
      $item->caudalValvula2     = $row['caudalValvula2'];
      $item->miraAliviadero     = $row['miraAliviadero'];
      $item->embalseAliviadero  = $row['embalseAliviadero'];
      $item->fecCreate          = $row['fecCreate'];
      $item->idpersonal         = $row['idpersonal'];

      array_push($items, $item);
    }

    return $items;

  }

  public function ListadoValvulas($fecInicial)
  {

    $items = [];

    $sql = "SELECT idvalvulas,hora,nivelEmbalse,aberturaValvula,caudalValvula,caudalTotalValvula,aberturaValvula2,caudalValvula2,miraAliviadero,embalseAliviadero,fecCreate,idpersonal FROM valvulas WHERE fecCreate LIKE '$fecInicial%';";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataValvulas();

      $item->hora               = $row['hora'];
      $item->nivelEmbalse       = $row['nivelEmbalse'];
      $item->aberturaValvula    = $row['aberturaValvula'];
      $item->caudalValvula      = $row['caudalValvula'];
      $item->caudalTotalValvula = $row['caudalTotalValvula'];
      $item->aberturaValvula2   = $row['aberturaValvula2'];
      $item->caudalValvula2     = $row['caudalValvula2'];
      $item->miraAliviadero     = $row['miraAliviadero'];
      $item->embalseAliviadero  = $row['embalseAliviadero'];
      $item->fecCreate          = $row['fecCreate'];
      $item->idpersonal         = $row['idpersonal'];

      array_push($items, $item);
    }

    return $items;
  }

  public function ListadoValvulas2($fecInicial,$fecFinal)
  {

    $items = [];

    $sql = "SELECT idvalvulas,hora,nivelEmbalse,aberturaValvula,caudalValvula,caudalTotalValvula,aberturaValvula2,caudalValvula2,miraAliviadero,embalseAliviadero,fecCreate,idpersonal FROM valvulas WHERE fecCreate between '$fecInicial%' AND '$fecFinal%';";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataValvulas();

      $item->hora               = $row['hora'];
      $item->nivelEmbalse       = $row['nivelEmbalse'];
      $item->aberturaValvula    = $row['aberturaValvula'];
      $item->caudalValvula      = $row['caudalValvula'];
      $item->caudalTotalValvula = $row['caudalTotalValvula'];
      $item->aberturaValvula2   = $row['aberturaValvula2'];
      $item->caudalValvula2     = $row['caudalValvula2'];
      $item->miraAliviadero     = $row['miraAliviadero'];
      $item->embalseAliviadero  = $row['embalseAliviadero'];
      $item->fecCreate          = $row['fecCreate'];
      $item->idpersonal         = $row['idpersonal'];

      array_push($items, $item);
    }

    return $items;

  }

  public function ListadoValvulasMes($mes,$anio)
  {

    $items = [];

    $sql = "SELECT idvalvulas,hora,nivelEmbalse,aberturaValvula,caudalValvula,caudalTotalValvula,aberturaValvula2,caudalValvula2,miraAliviadero,embalseAliviadero,fecCreate,idpersonal FROM valvulas WHERE fecCreate between '$anio-$mes-01%' AND '$anio-$mes-31%';";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataValvulas();

      $item->hora               = $row['hora'];
      $item->nivelEmbalse       = $row['nivelEmbalse'];
      $item->aberturaValvula    = $row['aberturaValvula'];
      $item->caudalValvula      = $row['caudalValvula'];
      $item->caudalTotalValvula = $row['caudalTotalValvula'];
      $item->aberturaValvula2   = $row['aberturaValvula2'];
      $item->caudalValvula2     = $row['caudalValvula2'];
      $item->miraAliviadero     = $row['miraAliviadero'];
      $item->embalseAliviadero  = $row['embalseAliviadero'];
      $item->fecCreate          = $row['fecCreate'];
      $item->idpersonal         = $row['idpersonal'];

      array_push($items, $item);
    }

    return $items;

  }
}