<?php

class Listjequetepeque extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->view->datos = [];
  }

  function render()
  {
    $res = $this->model->ListadoJequetepeque();
    $this->view->datos = $res;
    $this->view->Render('listjequetepeque/index');
  }
}
