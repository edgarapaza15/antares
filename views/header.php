<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Antares</title>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/normalize.css">
  <!-- <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/app.css">
  <!--     <script src="<?php echo constant('URL'); ?>node_modules/modernizr/src/Modernizr.js"></script> -->

</head>

<body class="">
  <div class="top-bar nav-verde" id="responsive-menu">
    <div class="thumbnail">
      <img src="<?php echo constant('URL'); ?>public/img/pejesa.jpg" alt="Pejesa" width="100px">
    </div>
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Antares <small>v1.0.0</small></li>
        <li><a href="<?php echo constant('URL'); ?>login">Login</a></li>
        <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
        <li><a href="<?php echo constant('URL'); ?>resumen">Resumen</a></li>
        <li class="has-submenu ">
          <a href="#">Listado en tablas</a>
          <ul class="submenu menu vertical nested " data-submenu>
            <li><a href="<?php echo constant('URL'); ?>listgallito">Listado Gallito</a></li>
            <li><a href="<?php echo constant('URL'); ?>listtalambo">Listado Talambo Zaña</a></li>
            <li><a href="<?php echo constant('URL'); ?>listjequetepeque">Listado Jequetepeque</a></li>
            <li><a href="<?php echo constant('URL'); ?>listvalvulas">Listado Valvulas Howell Bunger y Aliviaderos</a></li>
          </ul>
        </li>

        <li class="has-submenu ">
          <a href="#">Datos Emsalse</a>
          <ul class="submenu menu vertical nested " data-submenu>
            <li><a href="<?php echo constant('URL'); ?>gallito">Embalse Gallito ciego</a></li>
            <li><a href="<?php echo constant('URL'); ?>talambozana">Bocatoma Talambo Zaña</a></li>
            <li><a href="<?php echo constant('URL'); ?>jequetepeque">Bocatoma jequetepeque</a></li>
            <li><a href="<?php echo constant('URL'); ?>valvulas">Valvulas Howell Bunger y Aliviaderos</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">

        <li><a href="<?php echo constant('URL'); ?>salir/end">Salir</a></li>
      </ul>
    </div>
  </div>
  <br>