<?php

class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  function Validar($datos)
  {
    #echo "Insertar datos";
    $sql = "SELECT idlogin,idpersonal,nivusu,chkusu FROM login WHERE email='" . $datos['user'] . "' and passwd = '" . $datos['passw'] . "';";
    $res = $this->conn->ConsultaArray($sql);
    return $res;
  }
}
