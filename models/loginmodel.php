<?php

class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Validar($datos)
  {
    // Sanitizar y validar entrada
    $user = filter_var($datos['user'], FILTER_SANITIZE_EMAIL);
    $passw = $datos['passw'];

    if (!$user || !$passw) {
      return false;
    }

    // Usar prepared statement para prevenir SQL injection
    $sql = "SELECT idpersonal, nivusu, chkusu, passwd FROM login WHERE email = ?";
    $stmt = $this->conn->prepare($sql);

    if ($stmt) {
      $stmt->bind_param("s", $user);
      $stmt->execute();
      $result = $stmt->get_result();
      $data = $result->fetch_assoc();
      $stmt->close();

      // Verificar contraseña de forma segura
      if ($data && password_verify($passw, $data['passwd'])) {
        return $data;
      }
    }

    return false;
  }

  public function NombrePersonal($idpersonal)
  {
    // Validar que idpersonal sea un entero
    $idpersonal = filter_var($idpersonal, FILTER_VALIDATE_INT);

    if (!$idpersonal) {
      return false;
    }

    // Usar prepared statement
    $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE idpersonal = ?";
    $stmt = $this->conn->prepare($sql);

    if ($stmt) {
      $stmt->bind_param("i", $idpersonal);
      $stmt->execute();
      $result = $stmt->get_result();
      $data = $result->fetch_assoc();
      $stmt->close();
      return $data;
    }

    return false;
  }
}
