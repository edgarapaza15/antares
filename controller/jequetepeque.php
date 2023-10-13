<?php

class Jequetepeque extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function reporte()
  {
    if (isset($_POST['btnGuardar'])) {
      #echo "Boton presionado";

      $hora               = $_POST['hora'];
      $alturamira               = $_POST['alturamira'];
      $nivelembalse             = $_POST['nivelembalse'];
      $ah1                      = $_POST['ah1'];
      $caudal1                  = $_POST['caudal1'];
      $ah2                      = $_POST['ah2'];
      $caudal2                  = $_POST['caudal2'];
      $ah3                      = $_POST['ah3'];
      $caudal3                  = $_POST['caudal3'];
      $ah4                      = $_POST['ah4'];
      $caudal4                  = $_POST['caudal4'];
      $caudalTotalCRadial       = $_POST['caudalTotalCRadial'];
      $miraCanalEntrada         = $_POST['miraCanalEntrada'];
      $ahCanalEntrada           = $_POST['ahCanalEntrada'];
      $caudalCanalEntrada       = $_POST['caudalCanalEntrada'];
      $ahCanalEntrada2          = $_POST['ahCanalEntrada2'];
      $caudalCanalEntrada2      = $_POST['caudalCanalEntrada2'];
      $caudalTotalCanalEntrada  = $_POST['caudalTotalCanalEntrada'];
      $miraRevestido            = $_POST['miraRevestido'];
      $caudalRevestido          = $_POST['caudalRevestido'];
      $canalAutorizadoRevestido = $_POST['canalAutorizadoRevestido'];
      $idpersonal = 1000;

      $res = $this->model->Guardar($hora, $alturamira, $nivelembalse, $ah1, $caudal1, $ah2, $caudal2, $ah3, $caudal3, $ah4, $caudal4, $caudalTotalCRadial, $miraCanalEntrada, $ahCanalEntrada, $caudalCanalEntrada, $ahCanalEntrada2, $caudalCanalEntrada2, $caudalTotalCanalEntrada, $miraRevestido, $caudalRevestido, $canalAutorizadoRevestido, $idpersonal);
      if ($res) {
        $msg = "Guardado";
      } else {
        $msg = "No guardado. Error";
      }
    } else {
      $msg = "No presiono";
    }

    $this->view->mensaje = $msg;
    $this->view->Render('jequetepeque/index');
  }

  function render()
  {
    $this->view->Render('jequetepeque/index');
  }
}
