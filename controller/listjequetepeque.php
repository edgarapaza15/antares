<?php

class Listjequetepeque extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->datos = [];
  }

    public function fecha1()
  {
    if(isset($_POST['btnBuscar']))
    {
      #echo "press";
      $fecInicial = $_POST['fecInicial'];
      $fecFinal   = $_POST['fecFinal'];

      if(!empty($fecInicial))
      {
        #$msg = "no vacio";
        if(!empty($fecFinal))
        {
          #echo "Buscar 2 fechas";
          $res = $this->model->ListadoJequetepeque2($fecInicial,$fecFinal);
        }else
        {
          #$msg = "Buscar 1 fechas";
          $res = $this->model->ListadoJequetepeque($fecInicial);
        }
      }else{
        $msg = "Fecha no seleccionada";
      }
    }

    $this->view->datos = $res;
    $this->view->mensaje = $msg;
    $this->view->Render('listjequetepeque/index');
  }

  public function Mes()
  {
    if(isset($_POST['btnBuscar2']))
    {
      #echo "press2";
      $mes  = $_POST['cbomes'];
      $anio = $_POST['cboanio'];
      if(!empty($mes))
      {
        #echo "Con mes";
        $res = $this->model->ListadoJequetepequeMes($mes,$anio);
      }else{
        #echo "Sin mes";
        $this->view->mensaje = "Debe obligatoriamente seleccionar un MES";

      }
    }
    $this->view->datos = $res;
    $this->view->Render('listjequetepeque/index');
  }

  function render()
  {
    $fechaHoy = date('Y-m-d');
    $res = $this->model->ListadoJequetepeque($fechaHoy);
    $this->view->datos = $res;
    $this->view->Render('listjequetepeque/index');
  }

}
