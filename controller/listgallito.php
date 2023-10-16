<?php

class Listgallito extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->datos = [];
  }

  function render()
  {
    $res = $this->model->ListadoGallito();
    $this->view->datos = $res;
    $this->view->Render('listgallito/index');
  }
}
