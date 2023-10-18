<?php
include_once 'personal.php';

class SysadminModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Listpersonal()
  {
    $items = [];

    $sql = "SELECT idpersonal,nombre,apellidos,sexo,telefono,fecha_nac,email,direccion,dni,foto FROM personal;";

    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new Personal();

      $item->nombre    = $row['nombre'];
      $item->apellidos = $row['apellidos'];
      $item->sexo      = $row['sexo'];
      $item->telefono  = $row['telefono'];
      $item->fecha_nac = $row['fecha_nac'];
      $item->email     = $row['email'];
      $item->direccion = $row['direccion'];
      $item->dni       = $row['dni'];
      $item->foto      = $row['foto'];

      array_push($items, $item);
    }

    return $items;

  }

  public function Create($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$direccion,$dni,$foto,$nivusu, $passwd1)
  {
    echo "funcion create model";
    $fecCreate = date("Y-m-d H:i:s");
    $sql = "INSERT INTO personal VALUES (null,'$nombre','$apellidos','$sexo','$telefono','$fecha_nac','$email','$direccion','$dni','$foto','$fecCreate','$fecCreate');";

    $res = $this->conn->ConsultaSin($sql);
    echo $res;
    $sql2 = "SELECT idpersonal FROM personal ORDER BY idpersonal DESC LIMIT 1;";
    $ultimo = $this->conn->ConsultaArray($sql2);

    $sql3 = "INSERT INTO login VALUES (null,".$ultimo['idpersonal'].",'$email',md5('$passwd1'),$nivusu,1);";
    $this->conn->ConsultaSin($sql3);

    return $res;
  }
}