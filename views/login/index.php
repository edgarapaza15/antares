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

      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">

        <li><a href="<?php echo constant('URL'); ?>salir/end">Salir</a></li>
      </ul>
    </div>
  </div>
  <br>

  <div class="grid-container">
    <div class="grid-x">
      <div class="cell small-6">
        <div class="thumbnail imagen">
          <img src="<?php echo constant('URL') ?>public/img/represa3.jpg" alt="Represa">
        </div>
      </div>
      <div class="cell small-6 gris">
        <div class="thumbnail center">
          <img src="<?php echo constant('URL') ?>public/img/pejesa.jpg" alt="Logo Pejesa" width="70%">
        </div>
        <h1>Bienvenido</h1>
        <?php echo $this->mensaje; ?>

        <form method="post" action="<?php echo constant('URL') ?>login/user" name="signup-form">
          <div class="">
            <label>Email</label>
            <input type="email" name="email" required />
          </div>
          <div class="">
            <label>Password</label>
            <input type="password" name="password" required />
          </div>
          <div class="">
            <label>Recordarme
              <input type="checkbox" name="recordarme" />
            </label>
          </div>
          <button type="submit" class="button success large" name="btnIngresar" value="btnIngresar">Ingresar</button>
        </form>
        <p class="text-center">No tienes cuenta? <a href="">Registrate</a></p>
      </div>
    </div>
  </div>


  <?php require 'views/footer.php'; ?>