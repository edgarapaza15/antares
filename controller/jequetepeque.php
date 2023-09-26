<?php

class Jequetepeque extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->Render('jequetepeque/index');
  }
}
