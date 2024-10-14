<?php

class Resumen extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->Render('resumen/index');
  }
}
