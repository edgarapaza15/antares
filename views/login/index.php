<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Antares</title>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
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
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <div class="thumbnail">
          <img src="<?php echo constant('URL') ?>public/img/represa3.jpg" alt="Represa">
        </div>
      </div>

      <div class="cell small-12 medium-6 large-6">
        <div>
          <img src="<?php echo constant('URL') ?>public/img/pejesa.jpg" alt="Logo Pejesa" width="70%">
        </div>
        <h2 class="titulo">Bienvenido</h2>
        <?php echo $this->mensaje; ?>

        <form method="post" action="<?php echo constant('URL') ?>login/user" name="signup-form">
          <div class="">
            <label>Usuario</label>
            <input type="text" name="email" required />
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