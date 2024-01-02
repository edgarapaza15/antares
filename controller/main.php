<?php

class Main extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->Render('main/index');
  }

  function grafico()
  {
    $modoGet = $_GET['modo'];
    $tipoDate = "";
    $columnaGallito = "volumenTotal";
    $columnaJequetepeque = "caudalTotalCanalEntrada";
    $columnaTalambozana = "caudalcompuertaTalambo";
    $columnaValvulas = "caudalTotalValvula";
    if(!empty($_GET['gallitoColumna'])&&!empty($_GET['jequetepequeColumna'])&&!empty($_GET['talambozanaColumna'])&&!empty($_GET['valvulasColumna'])){
      $columnaGallito = $_GET['gallitoColumna'];
      $columnaJequetepeque = $_GET['jequetepequeColumna'];
      $columnaTalambozana = $_GET['talambozanaColumna'];
      $columnaValvulas = $_GET['valvulasColumna'];
      //echo $columnaGallito." ".$columnaJequetepeque." ".$columnaTalambozana." ".$columnaValvulas;
    }
    switch ($modoGet) {
      case "dia":
        $tipoDate = "D";
        $gallito = $this->model->GraficoGallito(columna:$columnaGallito);
        $jequetepeque = $this->model->GraficoJequetepeque(columna:$columnaJequetepeque);
        $talamboazana = $this->model->GraficoTalamboazana(columna:$columnaTalambozana);
        $valvulas = $this->model->GraficoValvulas(columna:$columnaValvulas);
        break;
      case "mes":
        $tipoDate = "M";
        $gallito = $this->model->GraficoGallitoMes(columna:$columnaGallito);
        $jequetepeque = $this->model->GraficoJequetepequeMes(columna:$columnaJequetepeque);
        $talamboazana = $this->model->GraficoTalamboazanaMes(columna:$columnaTalambozana);
        $valvulas = $this->model->GraficoValvulasMes(columna:$columnaValvulas);
        break;
      default:
        $tipoDate = "D";
        $gallito = $this->model->GraficoGallito(columna:$columnaGallito);
        $jequetepeque = $this->model->GraficoJequetepeque(columna:$columnaJequetepeque);
        $talamboazana = $this->model->GraficoTalamboazana(columna:$columnaTalambozana);
        $valvulas = $this->model->GraficoValvulas(columna:$columnaValvulas);
        break;
    }
    //Consultas para data
    // $gallito = $this->model->GraficoGallito();
    // $jequetepeque = $this->model->GraficoJequetepeque();
    // $talamboazana = $this->model->GraficoTalamboazana();
    // $valvulas = $this->model->GraficoValvulas();

    //json para cada uno de los datos
    $jsonGallito[] = "Gallito";
    $jsonJequetepeque[] = "Jequetepeque";
    $jsonTalambozana[] = "Talambozana";
    $jsonValvulas[] = "Valvulas";
    $json = array();
    $jsonFecha[] = "product";
    while ($row = mysqli_fetch_array($gallito)) {
      $fecha = strtotime($row['fecha']);
      //$modo = date('D', $fecha);
      $modo = date($tipoDate, $fecha);
      $jsonFecha[] = $modo;
      $jsonGallito[] = $row['total'];
    }
    while ($row = mysqli_fetch_array($jequetepeque)) {
      $jsonJequetepeque[] = $row['total'];
    }
    while ($row = mysqli_fetch_array($talamboazana)) {
      $jsonTalambozana[] = $row['total'];
    }
    while ($row = mysqli_fetch_array($valvulas)) {
      $jsonValvulas[] = $row['total'];
    }

    $json[] = array(
      "modo" => $jsonFecha,
      "gallito" => $jsonGallito,
      "jequetepeque" => $jsonJequetepeque,
      "talambozana" => $jsonTalambozana,
      "valvulas" => $jsonValvulas,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
  }
  function graficoHora()
  {
    if (isset($_POST['fecha']) && !empty($_POST['fecha'])) {
      $fecha = $_POST['fecha'];
    } else {
      $fecha = date("Y-m-d");
    }
    $columnaGallito = "volumenTotal";
    $columnaJequetepeque = "caudalTotalCanalEntrada";
    $columnaTalambozana = "caudalcompuertaTalambo";
    $columnaValvulas = "caudalTotalValvula";
    if(!empty($_POST['gallitoColumna'])&&!empty($_POST['jequetepequeColumna'])&&!empty($_POST['talambozanaColumna'])&&!empty($_POST['valvulasColumna'])){
      $columnaGallito = $_GET['gallitoColumna'];
      $columnaJequetepeque = $_GET['jequetepequeColumna'];
      $columnaTalambozana = $_GET['talambozanaColumna'];
      $columnaValvulas = $_GET['valvulasColumna'];
      //echo $columnaGallito." ".$columnaJequetepeque." ".$columnaTalambozana." ".$columnaValvulas;
    }
    $gallito = $this->model->GraficoGallitoHora($fecha,columna:$columnaGallito);
    $jequetepeque = $this->model->GraficoJequetepequeHora($fecha,columna:$columnaJequetepeque);
    $talamboazana = $this->model->GraficoTalamboazanaHora($fecha,columna:$columnaTalambozana);
    $valvulas = $this->model->GraficoValvulasHora($fecha,columna:$columnaValvulas);

    while ($row = mysqli_fetch_array($gallito)) {
      $jsonFecha[] = $row['hora'];
      $jsonGallito[] = $row['total'];
    }
    while ($row = mysqli_fetch_array($jequetepeque)) {
      $jsonJequetepeque[] = $row['total'];
    }
    while ($row = mysqli_fetch_array($talamboazana)) {
      $jsonTalambozana[] = $row['total'];
    }
    while ($row = mysqli_fetch_array($valvulas)) {
      $jsonValvulas[] = $row['total'];
    }

    $json[] = array(
      "modo" => $jsonFecha,
      "gallito" => $jsonGallito,
      "jequetepeque" => $jsonJequetepeque,
      "talambozana" => $jsonTalambozana,
      "valvulas" => $jsonValvulas,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
  }
  function graficoMes()
  {
    if (isset($_POST['mes']) && !empty($_POST['mes'])) {
      $fecha = $_POST['mes'];
      $mes = date("m", strtotime($fecha));
      $anio = date("Y", strtotime($fecha));
    } else {
      $mes = date("m");
      $anio = date("Y");
    }
    $columnaGallito = "volumenTotal";
    $columnaJequetepeque = "caudalTotalCanalEntrada";
    $columnaTalambozana = "caudalcompuertaTalambo";
    $columnaValvulas = "caudalTotalValvula";
    if(!empty($_POST['gallitoColumna'])&&!empty($_POST['jequetepequeColumna'])&&!empty($_POST['talambozanaColumna'])&&!empty($_POST['valvulasColumna'])){
      $columnaGallito = $_GET['gallitoColumna'];
      $columnaJequetepeque = $_GET['jequetepequeColumna'];
      $columnaTalambozana = $_GET['talambozanaColumna'];
      $columnaValvulas = $_GET['valvulasColumna'];
      //echo $columnaGallito." ".$columnaJequetepeque." ".$columnaTalambozana." ".$columnaValvulas;
    }
    $gallito = $this->model->GraficoGallitoMesUnico($mes,$anio,columna:$columnaGallito);
    $jequetepeque = $this->model->GraficoJequetepequeMesUnico($mes,$anio,columna:$columnaJequetepeque);
    $talamboazana = $this->model->GraficoTalamboazanaMesUnico($mes,$anio,columna:$columnaTalambozana);
    $valvulas = $this->model->GraficoValvulasMesUnico($mes,$anio,columna:$columnaValvulas);

    while ($row = mysqli_fetch_array($gallito)) {
      $jsonGallito[] = $row['total'];
      $jsonGallitoFecha[] = $row['fecha'];
    }
    while ($row = mysqli_fetch_array($jequetepeque)) {
      $jsonJequetepeque[] = $row['total'];
      $jsonJequetepequeFecha[] = $row['fecha'];
    }
    while ($row = mysqli_fetch_array($talamboazana)) {
      $jsonTalambozana[] = $row['total'];
      $jsonTalambozanaFecha[] = $row['fecha'];
    }
    while ($row = mysqli_fetch_array($valvulas)) {
      $jsonValvulas[] = $row['total'];
      $jsonValvulasFecha[] = $row['fecha'];
    }

    $json = array(
      "gallito" => $jsonGallito,
      "gallitoFecha"=>$jsonGallitoFecha,
      "jequetepeque" => $jsonJequetepeque,
      "jequetepequeFecha" =>$jsonJequetepequeFecha,
      "talambozana" => $jsonTalambozana,
      "talambozanaFecha"=>$jsonTalambozanaFecha,
      "valvulas" => $jsonValvulas,
      "valvulasFecha"=>$jsonValvulasFecha,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
  }
}
