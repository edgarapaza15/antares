<?php

class Talambozana extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function reporte()
  {
    if (isset($_POST['btnGuardar'])) {

      $hora                     = $_POST['hora'];
      $nivelembalse1            = $_POST['nivelembalse1'];
      $compuerta4               = $_POST['compuerta4'];
      $compuerta5               = $_POST['compuerta5'];
      $compuerta6               = $_POST['compuerta6'];
      $miracompuertaTalambo     = $_POST['miracompuertaTalambo'];
      $caudalcompuertaTalambo   = $_POST['caudalcompuertaTalambo'];
      $compuerta1               = $_POST['compuerta1'];
      $compuerta2               = $_POST['compuerta2'];
      $compuerta3               = $_POST['compuerta3'];
      $miracompuertaGuadalupe   = $_POST['miracompuertaGuadalupe'];
      $caudalcompuertaGuadalupe = $_POST['caudalcompuertaGuadalupe'];
      $compu1                   = $_POST['compu1'];
      $compu2                   = $_POST['compu2'];
      $compu3                   = $_POST['compu3'];
      $compu4                   = $_POST['compu4'];
      $compu5                   = $_POST['compu5'];
      $compu6                   = $_POST['compu6'];
      $comptas                  = $_POST['comptas'];
      $mirapez                  = $_POST['mirapez'];
      $caudalpez                = $_POST['caudalpez'];
      $miraEscLim               = $_POST['miraEscLim'];
      $caudalEscLim             = $_POST['caudalEscLim'];
      $miraBarrajo              = $_POST['miraBarrajo'];
      $caudalBarrajo            = $_POST['caudalBarrajo'];
      $miraTalamboG             = $_POST['miraTalamboG'];
      $caudalTalambozana        = $_POST['caudalTalambozanaG1'];
      $salidaTalambo            = $_POST['salidaTalambo'];
      $idpersonal               = 1000;

      $res = $this->model->Guardar($hora,$nivelembalse1,$compuerta4,$compuerta5,$compuerta6,$miracompuertaTalambo,$caudalcompuertaTalambo,$compuerta1,$compuerta2,$compuerta3,$miracompuertaGuadalupe,$caudalcompuertaGuadalupe,$compu1,$compu2,$compu3,$compu4,$compu5,$compu6,$comptas,$mirapez,$caudalpez,$miraEscLim,$caudalEscLim,$miraBarrajo,$caudalBarrajo,$miraTalamboG,$caudalTalambozana,$salidaTalambo,$idpersonal);

      if ($res) {
        $msg = "Guardado";
      } else {
        $msg = "No guardado. Error";
      }
    } else {
      $msg = "No presiono";
    }
    $this->view->mensaje = $msg;
    $this->view->Render('talambozana/index');
  }

  function render()
  {
    $this->view->Render('talambozana/index');
  }
}
