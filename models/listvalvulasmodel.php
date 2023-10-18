<?php
include_once 'dataValvulas.php';

class ListvalvulasModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function ListadoValvulas()
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
}