<?php

class Valvulas extends Controller
{

  function __construct()
  {
    parent::__construct();
  }
  function reporte()
  {
    if (isset($_POST['btnGuardar'])) {
      $hora         = $_POST['hora'];
      $nivelEmbalse       = $_POST['nivelEmbalse'];
      $aberturaValvula    = $_POST['aberturaValvula'];
      $caudalValvula      = $_POST['caudalValvula'];
      $caudalTotalValvula = $_POST['caudalTotalValvula'];
      $aberturaValvula2   = $_POST['aberturaValvula2'];
      $caudalValvula2     = $_POST['caudalValvula2'];
      $miraAliviadero     = $_POST['miraAliviadero'];
      $embalseAliviadero  = $_POST['embalseAliviadero'];
      $idpersonal         = $_SESSION['katari'];

      $res = $this->model->Guardar($hora, $nivelEmbalse, $aberturaValvula, $caudalValvula, $caudalTotalValvula, $aberturaValvula2, $caudalValvula2, $miraAliviadero, $embalseAliviadero, $idpersonal);
      if ($res) {
        $msg = "Guardado";
      } else {
        $msg = "No guardado. Error";
      }
    } else {
      $msg = "No presiono";
    }
    $this->view->mensaje = $msg;
    $this->view->Render('valvulas/index');
  }

  function render()
  {
    $this->view->Render('valvulas/index');
  }
}
