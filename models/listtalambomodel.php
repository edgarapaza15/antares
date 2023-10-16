<?php
include_once 'dataTalambo.php';

class ListtalamboModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function ListadoTalambo()
  {
    $items = [];

    $sql = "SELECT idtalambo,hora,nivelembalse1,compuerta4,compuerta5,compuerta6,miracompuertaTalambo,caudalcompuertaTalambo,compuerta1,compuerta2,compuerta3,miracompuertaGuadalupe,caudalcompuertaGuadalupe,compu1,compu2,compu3,compu4,compu5,compu6,comptas,mirapez,caudalpez,miraEscLim,caudalEscLim,miraBarrajo,caudalBarrajo,fecCreate,miraTalamboG,caudalTalambozana,salidaTalambo,idpersonal FROM talambozana;";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new DataTalambo();

      $item->hora                     = $row['hora'];
      $item->nivelembalse1            = $row['nivelembalse1'];
      $item->compuerta4               = $row['compuerta4'];
      $item->compuerta5               = $row['compuerta5'];
      $item->compuerta6               = $row['compuerta6'];
      $item->miracompuertaTalambo     = $row['miracompuertaTalambo'];
      $item->caudalcompuertaTalambo   = $row['caudalcompuertaTalambo'];
      $item->compuerta1               = $row['compuerta1'];
      $item->compuerta2               = $row['compuerta2'];
      $item->compuerta3               = $row['compuerta3'];
      $item->miracompuertaGuadalupe   = $row['miracompuertaGuadalupe'];
      $item->caudalcompuertaGuadalupe = $row['caudalcompuertaGuadalupe'];
      $item->compu1                   = $row['compu1'];
      $item->compu2                   = $row['compu2'];
      $item->compu3                   = $row['compu3'];
      $item->compu4                   = $row['compu4'];
      $item->compu5                   = $row['compu5'];
      $item->compu6                   = $row['compu6'];
      $item->comptas                  = $row['comptas'];
      $item->mirapez                  = $row['mirapez'];
      $item->caudalpez                = $row['caudalpez'];
      $item->miraEscLim               = $row['miraEscLim'];
      $item->caudalEscLim             = $row['caudalEscLim'];
      $item->miraBarrajo              = $row['miraBarrajo'];
      $item->caudalBarrajo            = $row['caudalBarrajo'];
      $item->miraTalamboG             = $row['miraTalamboG'];
      $item->caudalTalambozana        = $row['caudalTalambozana'];
      $item->salidaTalambo            = $row['salidaTalambo'];
      $item->idpersonal               = $row['idpersonal'];

      array_push($items, $item);
    }

    return $items;

  }
}