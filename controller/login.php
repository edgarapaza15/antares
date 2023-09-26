<?php

class Login extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function user()
  {
    #echo "Recibiendo datos de Login<br>";
    $user = trim(strtolower($_POST['email']));
    $passw = trim(strtolower($_POST['password']));

    $res = $this->model->Validar(['user' => $user, 'passw' => $passw]);

    if ($res) {
      $msg = "Validado correctamente";
      if ($res['chkusu']) {
        $_SESSION['katari'] = $res['idpersonal'];
        $_SESSION['nivel'] = $res['nivel'];
        header('location: ' . constant('URL') . 'main');
      } else {
        $msg = "Usuario NO ACTIVO";
      }
    } else {
      $msg = "Usuario no reconocido";
    }
    #echo $msg;
    $this->view->mensaje = $msg;
    $this->render();
  }

  function render()
  {
    $this->view->Render('login/index');
  }
}
