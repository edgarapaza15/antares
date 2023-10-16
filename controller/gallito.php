<?php

class Gallito extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function reporte()
  {
    if (isset($_POST['btnGuardar'])) {
      $hora                     = $_POST['hora'];
      $volumenCrecidas          = $_POST['volumenCrecidas'];
      $laminacionGallito        = $_POST['laminacionGallito'];
      $nivelEmbalse             = $_POST['nivelEmbalse'];
      $volumenTotal             = $_POST['volumenTotal'];
      $volumenUtil              = $_POST['volumenUtil'];
      $ingresoMiraPaltas        = $_POST['ingresoMiraPaltas9'];
      $ingresoCaudalPaltas      = $_POST['ingresoCaudalPaltas'];
      $ingresoMiraYonan         = $_POST['ingresoMiraYonan'];
      $ingresoCaudalYonan       = $_POST['ingresoCaudalYonan'];
      $salidaMiraE2             = $_POST['salidaMiraE2'];
      $salidaCaudalE2           = $_POST['salidaCaudalE2'];
      $salidaMiraMinicentral    = $_POST['salidaMiraMinicentral'];
      $salidaCaudalMinicentral  = $_POST['salidaCaudalMinicentral'];
      $salidaMiraCGC            = $_POST['salidaMiraCGC'];
      $salidaCaudalCGC          = $_POST['salidaCaudalCGC'];
      $salidaMiraCTorta         = $_POST['salidaMiraCTorta'];
      $salidaCaudalCTorta       = $_POST['salidaCaudalCTorta'];
      $caudalTotal              = $_POST['caudalTotal'];
      $nivelEmbalseCompensacion = $_POST['nivelEmbalseCompensacion'];
      $volumenTotalEmbalse      = $_POST['volumenTotalEmbalse'];
      $aberturaComp1            = $_POST['aberturaComp1'];
      $caudalComp1              = $_POST['caudalComp1'];
      $aberturaComp2            = $_POST['aberturaComp2'];
      $caudalComp2              = $_POST['caudalComp2'];
      $idpersonal               = 1000;

      $res = $this->model->Guardar($hora,$volumenCrecidas,$nivelEmbalse,$volumenTotal,$volumenUtil,$caudalTotal,$ingresoMiraPaltas,$ingresoCaudalPaltas,$ingresoMiraYonan,$ingresoCaudalYonan,$salidaMiraE2,$salidaCaudalE2,$salidaMiraMinicentral,$salidaCaudalMinicentral,$salidaMiraCGC,$salidaCaudalCGC,$salidaMiraCTorta,$salidaCaudalCTorta,$nivelEmbalseCompensacion,$volumenTotalEmbalse,$aberturaComp1,$caudalComp1,$aberturaComp2,$caudalComp2,$idpersonal,$laminacionGallito);

      if ($res) {
        $msg = "Guardado";
      } else {
        $msg = "No guardado. Error";
      }
    } else {
      $msg = "No presiono";
    }
    $this->view->mensaje = $msg;
    $this->view->Render('gallito/index');
  }

  function render()
  {
    $this->view->Render('gallito/index');
  }
}
