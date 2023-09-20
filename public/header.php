<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Antares</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/demo/demo.css">
  <link rel="stylesheet" href="./assets/css/app.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.8.1/css/foundation-float.min.css" integrity="sha512-9e5tn8An1OA6g+yGdo+qsGIR/OrSWMdnZvWpltxcGc3VjphpMW3wWNXkos7hAo3xdU/eelDlDLO8ZIbB5duw1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.8.1/css/foundation.min.css" integrity="sha512-QuI0HElOtzmj6o/bXQ52phfzjVFRAhtxy2jTqsp85mdl1yvbSQW0Hf7TVCfvzFjDgTrZostqgM5+Wmb/NmqOLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!--  <link rel="stylesheet" href="./assets/css/foundation-float.css">
  <link rel="stylesheet" href="./assets/css/foundation.css"> -->

</head>

<body>


  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

    <!-- SIDEBAR -->
    <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
      <div class="row column">
        <br>
        <img class="thumbnail" src="./assets/img/pejesa.jpg">
        <h5>Menu</h5>

        <ul class="vertical menu nested" data-responsive-menu="drilldown medium-accordion" style="max-width: 250px;">
          <li>
            <a href="dashboard.php" class="btn btn-large">Inicio</a>
          </li>
          <li>
            <a href="resumen.php" class="btn btn-large">Resumen</a>
          </li>
          <li>
            <a href="gallito.php">Embalse Gallito Ciego</a>
          </li>
          <li>
            <a href="talambozana.php">Bocatoma Talambo Zaña</a>
          </li>
          <li>
            <a href="jequetepeque.php">Bocatoma Jequetepeque</a>
          </li>
          <li>
            <a href="valvulas.php">Vávulas HOWELL BUNGER y Aliviadero de Crecidas</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- END SIDEBAR -->

    <!-- NAVIGATION -->

    <div class="off-canvas-content" data-off-canvas-content>

      <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
      </div>

      <div class="top-bar" id="example-menu">
        <div class="top-bar-right">
          <ul class="menu">
            <li class="menu-text">Antares <small>v1.0.0</small></li>
          </ul>
        </div>
        <div class="top-bar-left">
          <ul class=" medium-horizontal vertical dropdown menu" data-responsive-menu="accordion medium-dropdown">
            <li><a href="dashboard.php">Inicio</a></li>
            <li><a href="resumen.php">Resumen</a></li>
            <li class="has-submenu ">
              <a href="#">Datos Emsalse</a>
              <ul class="submenu menu vertical nested " data-submenu>
                <li><a href="gallito.php">Embalse Gallito ciego</a></li>
                <li><a href="talambozana.php">Bocatoma Talambo Zaña</a></li>
                <li><a href="jequetepeque.php">Bocatoma jequetepeque</a></li>
                <li><a href="valvulas.php">Valvulas Howell Bunger y Aliviaderos</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="top-bar-right">
          <ul class="menu">
            <li><input type="search" placeholder="Search"></li>
            <li><button type="button" class="button">Search</button></li>
          </ul>
        </div>
      </div>


    </div>
    <!-- END NAVIGATION -->

    <div class="off-canvas-content" data-off-canvas-content>