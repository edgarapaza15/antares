<?php

class Sysadmin extends Controller
{
  function __construct()
  {
    parent::__construct();
    #$this->view->datos = [];
  }

  function Nuevo()
  {
    $this->view->RenderAdmin('nuevo/index');
  }

  function render()
  {
    $result = $this->model->Listpersonal();
    $this->view->datos = $result;
    $this->view->RenderAdmin('sysadmin/index');
  }

  function create()
  {
    echo "aqui";
    $nombre    = trim(strtoupper($_POST['nombre']));
    $apellidos = trim(strtoupper($_POST['apellidos']));
    $sexo      = trim(strtoupper($_POST['sexo']));
    $telefono  = trim(strtoupper($_POST['telefono']));
    $dni       = trim(strtoupper($_POST['dni']));
    $fecha_nac = trim($_POST['fecha_nac']);
    $foto      = trim($_POST['foto']);
    $direccion = trim(strtoupper($_POST['direccion']));
    $email     = trim(strtolower($_POST['email']));
    $nivusu    = trim(strtolower($_POST['nivel']));
    $passwd1   = trim(strtolower($_POST['passwd1']));

    $res = $this->model->Create($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$direccion,$dni,$foto,$nivusu, $passwd1);
    var_dump($res);
    //$this->view->mensaje = $res;
    $this->view->RenderAdmin('sysadmin/index');
  }


}
