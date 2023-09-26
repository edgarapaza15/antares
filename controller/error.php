<?php

class ErrorGeneral extends Controller
{
  function __construct()
  {
    parent::__construct();
    #echo "<p>Error cargando el recurso</p>";
  }

  function render()
  {
    $this->view->mensaje = "Pagina en Construcción o no fue creada.";
    $this->view->Render('error/index');
  }
}
