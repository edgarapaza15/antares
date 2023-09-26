<?php

class Valvulas extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->Render('valvulas/index');
  }
}
