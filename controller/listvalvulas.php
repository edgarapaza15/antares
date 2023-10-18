<?php

class Listvalvulas extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->datos = [];
  }

  function render()
  {
    $res = $this->model->ListadoValvulas();
    $this->view->datos = $res;
    $this->view->Render('listvalvulas/index');
  }
}
