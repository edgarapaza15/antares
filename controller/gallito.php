<?php

class Gallito extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->Render('gallito/index');
  }
}
