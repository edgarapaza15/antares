<?php

class Talambozana extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('talambozana/index');
	}
}