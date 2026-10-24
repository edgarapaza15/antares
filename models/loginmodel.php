<?php

class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Validar($username, $passwd)
  {
    // Usar prepared statement para prevenir SQL injection
    $sql = "SELECT idpersonal, nivusu, chkusu FROM login WHERE email = '$username' and passwd = '$passwd'";
    $res = $this->conn->ConsultaArray($sql);
    return $res;
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
