<?php
class Conexion
{
  private $conn;

  function __construct()
  {
    $host = constant('HOST');
    $user = constant('USER');
    $pass = constant('PASSWORD');
    $db   = constant('DB');

    $this->conn = new mysqli($host, $user, $pass, $db);

    if ($this->conn->connect_errno) {
      error_log("Error al conectar a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error);
      throw new Exception("Error de conexión a la base de datos");
    }

    // Configurar charset
    $this->conn->set_charset(constant('CHATSET'));
    
    return $this->conn;
  }

  // Método para prepared statements
  public function prepare($sql)
  {
    return $this->conn->prepare($sql);
  }

  function ConsultaSin($sql)
  {
    # Sirve para: INSERT, UPDATE, DELETE
    if (!$this->conn->query($sql)) {
      error_log("Error en consulta: " . mysqli_error($this->conn));
      return FALSE;
    }

    return TRUE;
  }

  function ConsultaCon($sql)
  {
    # Sirve para: SELECT
    if (!$result = $this->conn->query($sql)) {
      error_log("Error en consulta: " . mysqli_error($this->conn));
      return false;
    }

    return $result;
  }

  function ConsultaArray($sql)
  {
    # Sirve para: SELECT convertido en array

    if (!$result = $this->conn->query($sql)) {
      error_log("Error en consulta: " . mysqli_error($this->conn));
      return false;
    }

    $data = $result->fetch_array(MYSQLI_ASSOC);
    return $data;
  }

  // Método para cerrar conexión
  public function close()
  {
    if ($this->conn) {
      $this->conn->close();
    }
  }

  // Destructor para cerrar conexión automáticamente
  public function __destruct()
  {
    $this->close();
  }
}
