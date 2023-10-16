<?php

class Listtalambo extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->datos = [];
  }

  function render()
  {
    $res = $this->model->ListadoTalambo();
    $this->view->datos = $res;
    $this->view->Render('listtalambo/index');
  }
}
