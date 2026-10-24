<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Antares</title>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/app.css">
  <!--Graficos ECHARTS-->
  <script src="<?php echo CONSTANT("URL");?>node_modules/echarts/dist/echarts.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body class="">
  <header class="app-header">
    <div class="app-header__inner">
      <a class="app-brand" href="<?php echo constant('URL'); ?>main">
        <img class="app-brand__logo" src="<?php echo constant('URL'); ?>public/img/pejesa.jpg" alt="Pejesa">
        <span class="app-brand__text">
          <span class="app-brand__name">Antares</span>
          <span class="app-brand__version">v1.0.0</span>
        </span>
      </a>

      <button type="button" class="app-nav-toggle" data-toggle="app-nav-panel" aria-label="Abrir menú" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="app-nav" id="app-nav-panel" data-toggler=".is-open">
        <ul class="dropdown menu app-menu" data-dropdown-menu>
          <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
          <li class="has-submenu">
            <a href="#">Listados</a>
            <ul class="submenu menu vertical nested" data-submenu>
              <li><a href="<?php echo constant('URL'); ?>listgallito">Listado Gallito</a></li>
              <li><a href="<?php echo constant('URL'); ?>listtalambo">Listado Talambo Zaña</a></li>
              <li><a href="<?php echo constant('URL'); ?>listjequetepeque">Listado Jequetepeque</a></li>
              <li><a href="<?php echo constant('URL'); ?>listvalvulas">Listado Válvulas Howell Bunger y Aliviaderos</a></li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="#">Datos Embalse</a>
            <ul class="submenu menu vertical nested" data-submenu>
              <li><a href="<?php echo constant('URL'); ?>gallito">Embalse Gallito Ciego</a></li>
              <li><a href="<?php echo constant('URL'); ?>talambozana">Bocatoma Talambo Zaña</a></li>
              <li><a href="<?php echo constant('URL'); ?>jequetepeque">Bocatoma Jequetepeque</a></li>
              <li><a href="<?php echo constant('URL'); ?>valvulas">Válvulas Howell Bunger y Aliviaderos</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <div class="app-header__actions">
        <?php if (!empty($_SESSION['nombre'])): ?>
          <div class="app-user">
            <?php if (!empty($_SESSION['foto'])): ?>
              <img class="app-user__avatar" src="<?php echo constant('URL') . $_SESSION['foto']; ?>" alt="">
            <?php endif; ?>
            <span class="app-user__name"><?php echo htmlspecialchars($_SESSION['nombre'], ENT_QUOTES, 'UTF-8'); ?></span>
          </div>
        <?php endif; ?>
        <a class="app-logout" href="<?php echo constant('URL'); ?>salir/end">Salir</a>
      </div>
    </div>
  </header>
