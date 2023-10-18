<?php
include_once 'dataJequetepeque.php';

class ListjequetepequeModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function ListadoJequetepeque()
  {
    $items = [];

    $sql = "SELECT idjequetepeque,hora,alturamira,nivelembalse,ah1,caudal1,ah2,caudal2,ah3,caudal3,ah4,caudal4,caudalTotalCRadial,miraCanalEntrada,ahCanalEntrada,caudalCanalEntrada,ahCanalEntrada2,caudalCanalEntrada2,caudalTotalCanalEntrada,miraRevestido,caudalRevestido,canalAutorizadoRevestido,fecCreate,idpersonal FROM jequetepeque;";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataJequetepeque();

      $item->hora                     = $row['hora'];
      $item->alturamira               = $row['alturamira'];
      $item->nivelembalse             = $row['nivelembalse'];
      $item->ah1                      = $row['ah1'];
      $item->caudal1                  = $row['caudal1'];
      $item->ah2                      = $row['ah2'];
      $item->caudal2                  = $row['caudal2'];
      $item->ah3                      = $row['ah3'];
      $item->caudal3                  = $row['caudal3'];
      $item->ah4                      = $row['ah4'];
      $item->caudal4                  = $row['caudal4'];
      $item->caudalTotalCRadial       = $row['caudalTotalCRadial'];
      $item->miraCanalEntrada         = $row['miraCanalEntrada'];
      $item->ahCanalEntrada           = $row['ahCanalEntrada'];
      $item->caudalCanalEntrada       = $row['caudalCanalEntrada'];
      $item->ahCanalEntrada2          = $row['ahCanalEntrada2'];
      $item->caudalCanalEntrada2      = $row['caudalCanalEntrada2'];
      $item->caudalTotalCanalEntrada  = $row['caudalTotalCanalEntrada'];
      $item->miraRevestido            = $row['miraRevestido'];
      $item->caudalRevestido          = $row['caudalRevestido'];
      $item->canalAutorizadoRevestido = $row['canalAutorizadoRevestido'];
      $item->fecCreate                = $row['fecCreate'];
      $item->idpersonal               = $row['idpersonal'];

      array_push($items, $item);
    }

    return $items;

  }
}