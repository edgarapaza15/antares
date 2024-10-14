<?php
class Mainmodel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  function GraficoGallito($columna="volumenTotal")
  {
    $sql = "SELECT fechas.fecha AS fecha, IFNULL(AVG(gallito.$columna), 0) AS total
              FROM
                (SELECT CURDATE() AS fecha
                UNION SELECT CURDATE() - INTERVAL 1 DAY
                UNION SELECT CURDATE() - INTERVAL 2 DAY
                UNION SELECT CURDATE() - INTERVAL 3 DAY
                UNION SELECT CURDATE() - INTERVAL 4 DAY
                UNION SELECT CURDATE() - INTERVAL 5 DAY
                UNION SELECT CURDATE() - INTERVAL 6 DAY) AS fechas
              LEFT JOIN
                  gallito ON DATE(gallito.fecCreate) = fechas.fecha
              GROUP BY
                  fechas.fecha
              ORDER BY
                  fechas.fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoJequetepeque($columna="caudalTotalCanalEntrada")
  {
    $sql = "SELECT fechas.fecha AS fecha, IFNULL(AVG(jequetepeque.$columna), 0) AS total
              FROM
                (SELECT CURDATE() AS fecha
                UNION SELECT CURDATE() - INTERVAL 1 DAY
                UNION SELECT CURDATE() - INTERVAL 2 DAY
                UNION SELECT CURDATE() - INTERVAL 3 DAY
                UNION SELECT CURDATE() - INTERVAL 4 DAY
                UNION SELECT CURDATE() - INTERVAL 5 DAY
                UNION SELECT CURDATE() - INTERVAL 6 DAY) AS fechas
              LEFT JOIN
                jequetepeque ON DATE(jequetepeque.fecCreate) = fechas.fecha
              GROUP BY
                fechas.fecha
              ORDER BY
                fechas.fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoTalamboazana($columna="caudalcompuertaTalambo")
  {
    $sql = "SELECT fechas.fecha AS fecha, IFNULL(AVG(talambozana.$columna), 0) AS total
              FROM
                (SELECT CURDATE() AS fecha
                UNION SELECT CURDATE() - INTERVAL 1 DAY
                UNION SELECT CURDATE() - INTERVAL 2 DAY
                UNION SELECT CURDATE() - INTERVAL 3 DAY
                UNION SELECT CURDATE() - INTERVAL 4 DAY
                UNION SELECT CURDATE() - INTERVAL 5 DAY
                UNION SELECT CURDATE() - INTERVAL 6 DAY) AS fechas
              LEFT JOIN
                talambozana ON DATE(talambozana.fecCreate) = fechas.fecha
              GROUP BY
                fechas.fecha
              ORDER BY
                fechas.fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoValvulas($columna="caudalTotalValvula")
  {
    $sql = "SELECT fechas.fecha AS fecha, IFNULL(AVG(valvulas.$columna), 0) AS total
              FROM
                (SELECT CURDATE() AS fecha
                UNION SELECT CURDATE() - INTERVAL 1 DAY
                UNION SELECT CURDATE() - INTERVAL 2 DAY
                UNION SELECT CURDATE() - INTERVAL 3 DAY
                UNION SELECT CURDATE() - INTERVAL 4 DAY
                UNION SELECT CURDATE() - INTERVAL 5 DAY
                UNION SELECT CURDATE() - INTERVAL 6 DAY) AS fechas
              LEFT JOIN
                valvulas ON DATE(valvulas.fecCreate) = fechas.fecha
              GROUP BY
                fechas.fecha
              ORDER BY
                fechas.fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  //POR MES
  function GraficoGallitoMes($columna="volumenTotal")
  {
    $sql = "SELECT DATE_FORMAT(fechas.fecha, '%Y-%m') AS fecha, IFNULL(AVG(gallito.$columna), 0) AS total
              FROM
                (SELECT CURDATE() AS fecha
                UNION SELECT CURDATE() - INTERVAL 1 MONTH
                UNION SELECT CURDATE() - INTERVAL 2 MONTH
                UNION SELECT CURDATE() - INTERVAL 3 MONTH
                UNION SELECT CURDATE() - INTERVAL 4 MONTH
                UNION SELECT CURDATE() - INTERVAL 5 MONTH
                UNION SELECT CURDATE() - INTERVAL 6 MONTH
                UNION SELECT CURDATE() - INTERVAL 7 MONTH
                UNION SELECT CURDATE() - INTERVAL 8 MONTH
                UNION SELECT CURDATE() - INTERVAL 9 MONTH
                UNION SELECT CURDATE() - INTERVAL 10 MONTH
                UNION SELECT CURDATE() - INTERVAL 11 MONTH) AS fechas
              LEFT JOIN
                gallito ON DATE_FORMAT(gallito.fecCreate, '%Y-%m') = DATE_FORMAT(fechas.fecha, '%Y-%m')
              GROUP BY
                fecha
              ORDER BY
                fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoJequetepequeMes($columna="caudalTotalCanalEntrada")
  {
    $sql = "SELECT DATE_FORMAT(fechas.fecha, '%Y-%m') AS fecha, IFNULL(AVG(jequetepeque.$columna), 0) AS total
              FROM
                (SELECT CURDATE() AS fecha
                UNION SELECT CURDATE() - INTERVAL 1 MONTH
                UNION SELECT CURDATE() - INTERVAL 2 MONTH
                UNION SELECT CURDATE() - INTERVAL 3 MONTH
                UNION SELECT CURDATE() - INTERVAL 4 MONTH
                UNION SELECT CURDATE() - INTERVAL 5 MONTH
                UNION SELECT CURDATE() - INTERVAL 6 MONTH
                UNION SELECT CURDATE() - INTERVAL 7 MONTH
                UNION SELECT CURDATE() - INTERVAL 8 MONTH
                UNION SELECT CURDATE() - INTERVAL 9 MONTH
                UNION SELECT CURDATE() - INTERVAL 10 MONTH
                UNION SELECT CURDATE() - INTERVAL 11 MONTH) AS fechas
              LEFT JOIN
                jequetepeque ON DATE_FORMAT(jequetepeque.fecCreate, '%Y-%m') = DATE_FORMAT(fechas.fecha, '%Y-%m')
              GROUP BY
                fecha
              ORDER BY
                fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoTalamboazanaMes($columna="caudalcompuertaTalambo")
  {
    $sql = "SELECT DATE_FORMAT(fechas.fecha, '%Y-%m') AS fecha, IFNULL(AVG(talambozana.$columna), 0) AS total
              FROM
                (SELECT CURDATE() AS fecha
                UNION SELECT CURDATE() - INTERVAL 1 MONTH
                UNION SELECT CURDATE() - INTERVAL 2 MONTH
                UNION SELECT CURDATE() - INTERVAL 3 MONTH
                UNION SELECT CURDATE() - INTERVAL 4 MONTH
                UNION SELECT CURDATE() - INTERVAL 5 MONTH
                UNION SELECT CURDATE() - INTERVAL 6 MONTH
                UNION SELECT CURDATE() - INTERVAL 7 MONTH
                UNION SELECT CURDATE() - INTERVAL 8 MONTH
                UNION SELECT CURDATE() - INTERVAL 9 MONTH
                UNION SELECT CURDATE() - INTERVAL 10 MONTH
                UNION SELECT CURDATE() - INTERVAL 11 MONTH) AS fechas
              LEFT JOIN
                talambozana ON DATE_FORMAT(talambozana.fecCreate, '%Y-%m') = DATE_FORMAT(fechas.fecha, '%Y-%m')
              GROUP BY
                fecha
              ORDER BY
                fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoValvulasMes($columna="caudalTotalValvula")
  {
    $sql = "SELECT DATE_FORMAT(fechas.fecha, '%Y-%m') AS fecha, IFNULL(AVG(valvulas.$columna), 0) AS total
            FROM
              (SELECT CURDATE() AS fecha
              UNION SELECT CURDATE() - INTERVAL 1 MONTH
              UNION SELECT CURDATE() - INTERVAL 2 MONTH
              UNION SELECT CURDATE() - INTERVAL 3 MONTH
              UNION SELECT CURDATE() - INTERVAL 4 MONTH
              UNION SELECT CURDATE() - INTERVAL 5 MONTH
              UNION SELECT CURDATE() - INTERVAL 6 MONTH
              UNION SELECT CURDATE() - INTERVAL 7 MONTH
              UNION SELECT CURDATE() - INTERVAL 8 MONTH
              UNION SELECT CURDATE() - INTERVAL 9 MONTH
              UNION SELECT CURDATE() - INTERVAL 10 MONTH
              UNION SELECT CURDATE() - INTERVAL 11 MONTH) AS fechas
            LEFT JOIN
              valvulas ON DATE_FORMAT(valvulas.fecCreate, '%Y-%m') = DATE_FORMAT(fechas.fecha, '%Y-%m')
            GROUP BY
              fecha
            ORDER BY
              fecha;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  //por Hora
  function GraficoGallitoHora($fecha,$columna="volumenTotal")
  {
    $sql = "SELECT horas.hora AS hora, IFNULL(AVG(gallito.$columna), 0) AS total
            FROM
              (SELECT '00:00' AS hora
              UNION SELECT '01:00'
              UNION SELECT '02:00'
              UNION SELECT '03:00'
              UNION SELECT '04:00'
              UNION SELECT '05:00'
              UNION SELECT '06:00'
              UNION SELECT '07:00'
              UNION SELECT '08:00'
              UNION SELECT '09:00'
              UNION SELECT '10:00'
              UNION SELECT '11:00'
              UNION SELECT '12:00'
              UNION SELECT '13:00'
              UNION SELECT '14:00'
              UNION SELECT '15:00'
              UNION SELECT '16:00'
              UNION SELECT '17:00'
              UNION SELECT '18:00'
              UNION SELECT '19:00'
              UNION SELECT '20:00'
              UNION SELECT '21:00'
              UNION SELECT '22:00'
              UNION SELECT '23:00') AS horas
            LEFT JOIN
              gallito ON HOUR(gallito.fecCreate) = HOUR(horas.hora) AND DATE(gallito.fecCreate) = '$fecha'
            GROUP BY
              hora
            ORDER BY
              hora ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoJequetepequeHora($fecha,$columna="caudalTotalCanalEntrada")
  {
    $sql = "SELECT horas.hora AS hora, IFNULL(AVG(jequetepeque.$columna), 0) AS total
              FROM
                (SELECT '00:00' AS hora
                UNION SELECT '01:00'
                UNION SELECT '02:00'
                UNION SELECT '03:00'
                UNION SELECT '04:00'
                UNION SELECT '05:00'
                UNION SELECT '06:00'
                UNION SELECT '07:00'
                UNION SELECT '08:00'
                UNION SELECT '09:00'
                UNION SELECT '10:00'
                UNION SELECT '11:00'
                UNION SELECT '12:00'
                UNION SELECT '13:00'
                UNION SELECT '14:00'
                UNION SELECT '15:00'
                UNION SELECT '16:00'
                UNION SELECT '17:00'
                UNION SELECT '18:00'
                UNION SELECT '19:00'
                UNION SELECT '20:00'
                UNION SELECT '21:00'
                UNION SELECT '22:00'
                UNION SELECT '23:00') AS horas
              LEFT JOIN
                jequetepeque ON HOUR(jequetepeque.fecCreate) = HOUR(horas.hora) AND DATE(jequetepeque.fecCreate) = '$fecha'
              GROUP BY
                hora
              ORDER BY
                hora ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoTalamboazanaHora($fecha,$columna="caudalcompuertaTalambo")
  {
    $sql = "SELECT horas.hora AS hora, IFNULL(AVG(talambozana.$columna), 0) AS total
                FROM
                  (SELECT '00:00' AS hora
                  UNION SELECT '01:00'
                  UNION SELECT '02:00'
                  UNION SELECT '03:00'
                  UNION SELECT '04:00'
                  UNION SELECT '05:00'
                  UNION SELECT '06:00'
                  UNION SELECT '07:00'
                  UNION SELECT '08:00'
                  UNION SELECT '09:00'
                  UNION SELECT '10:00'
                  UNION SELECT '11:00'
                  UNION SELECT '12:00'
                  UNION SELECT '13:00'
                  UNION SELECT '14:00'
                  UNION SELECT '15:00'
                  UNION SELECT '16:00'
                  UNION SELECT '17:00'
                  UNION SELECT '18:00'
                  UNION SELECT '19:00'
                  UNION SELECT '20:00'
                  UNION SELECT '21:00'
                  UNION SELECT '22:00'
                  UNION SELECT '23:00') AS horas
                LEFT JOIN
                  talambozana ON HOUR(talambozana.fecCreate) = HOUR(horas.hora) AND DATE(talambozana.fecCreate) = '$fecha'
                GROUP BY
                  hora
                ORDER BY
                  hora ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoValvulasHora($fecha,$columna="caudalTotalValvula")
  {
    $sql = "SELECT horas.hora AS hora, IFNULL(AVG(valvulas.$columna), 0) AS total
              FROM
                (SELECT '00:00' AS hora
                UNION SELECT '01:00'
                UNION SELECT '02:00'
                UNION SELECT '03:00'
                UNION SELECT '04:00'
                UNION SELECT '05:00'
                UNION SELECT '06:00'
                UNION SELECT '07:00'
                UNION SELECT '08:00'
                UNION SELECT '09:00'
                UNION SELECT '10:00'
                UNION SELECT '11:00'
                UNION SELECT '12:00'
                UNION SELECT '13:00'
                UNION SELECT '14:00'
                UNION SELECT '15:00'
                UNION SELECT '16:00'
                UNION SELECT '17:00'
                UNION SELECT '18:00'
                UNION SELECT '19:00'
                UNION SELECT '20:00'
                UNION SELECT '21:00'
                UNION SELECT '22:00'
                UNION SELECT '23:00') AS horas
              LEFT JOIN
                valvulas ON HOUR(valvulas.fecCreate) = HOUR(horas.hora) AND DATE(valvulas.fecCreate) = '$fecha'
              GROUP BY
                hora
              ORDER BY
                hora ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  //por unico mes todos sus dias
  function GraficoGallitoMesUnico($mes,$anio,$columna="volumenTotal")
  {
    $sql = "SELECT DATE(fecCreate) AS fecha, AVG($columna) AS total
              FROM
                gallito
              WHERE
                MONTH(fecCreate) = $mes AND YEAR(fecCreate)= $anio
              GROUP BY
                DATE(fecCreate)
              ORDER BY
                DATE(fecCreate) ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoJequetepequeMesUnico($mes,$anio,$columna="caudalTotalCanalEntrada")
  {
    $sql = "SELECT DATE(fecCreate) AS fecha, AVG($columna) AS total
              FROM
                jequetepeque
              WHERE
                MONTH(fecCreate) = $mes AND YEAR(fecCreate) = $anio
              GROUP BY
                DATE(fecCreate)
              ORDER BY
                DATE(fecCreate) ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoTalamboazanaMesUnico($mes,$anio,$columna="caudalcompuertaTalambo")
  {
    $sql = "SELECT DATE(fecCreate) AS fecha, AVG($columna) AS total
              FROM
                talambozana
              WHERE
                MONTH(fecCreate) = $mes AND YEAR(fecCreate) = $anio
              GROUP BY
                DATE(fecCreate)
              ORDER BY
                DATE(fecCreate) ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  function GraficoValvulasMesUnico($mes,$anio,$columna="caudalTotalValvula")
  {
    $sql = "SELECT DATE(fecCreate) AS fecha, AVG($columna) AS total
                FROM
                valvulas
                WHERE
                  MONTH(fecCreate) = $mes AND YEAR(fecCreate) = $anio
                GROUP BY
                  DATE(fecCreate)
                ORDER BY
                  DATE(fecCreate) ASC;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
}
