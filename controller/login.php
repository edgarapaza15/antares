<?php

class Login extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function user()
  {
    
    $user = $_POST['txtusuario'];
    $passw = $_POST['txtpassword'];

    // Verificar token CSRF
    if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
      $this->view->mensaje = "Error de seguridad. Por favor, recargue la página.";
      $this->view->Render('login/index');
      return;
    }

    // Sanitizar entrada
    $user = sanitizeInput($_POST['txtusuario'], 'email');
    $passw = $_POST['txtpassword']; // No sanitizar contraseña antes de verificar

    // Validar entrada
    if (empty($user) || empty($passw)) {
      $this->view->mensaje = "Por favor, complete todos los campos.";
      $this->view->Render('login/index');
      return;
    }

    $res = $this->model->Validar(['user' => $user, 'passw' => $passw]);

    if ($res) {
      if ($res['chkusu']) {
        // Usuario activo - crear sesión para todos los niveles
        $_SESSION['katari'] = $res['idpersonal'];
        $_SESSION['nivel'] = $res['nivusu'];

        // Obtener información del usuario
        $persona = $this->model->NombrePersonal($res['idpersonal']);
        if ($persona) {
          $_SESSION['nombre'] = $persona['personal'];
          $_SESSION['foto'] = $persona['foto'];
        }

        // Regenerar ID de sesión por seguridad
        session_regenerate_id(true);

        // Redirigir según el nivel de usuario
        switch ($res['nivusu']) {
          case 1:
          case 2:
            header('location: ' . constant('URL') . 'main');
            exit();
            break;
          default:
            $msg = "Nivel de usuario no válido";
            break;
        }
      } else {
        $msg = "Usuario NO ACTIVO";
      }
    } else {
      $msg = "Usuario no reconocido";
    }


    $this->view->mensaje = $msg;
    
    $this->view->Render('login/index');
  }

  function render()
  {
    $this->view->Render('login/index');
  }
}
