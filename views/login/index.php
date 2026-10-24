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
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
  <header class="app-header">
    <div class="app-header__inner">
      <a class="app-brand" href="<?php echo constant('URL'); ?>login">
        <img class="app-brand__logo" src="<?php echo constant('URL'); ?>public/img/pejesa.jpg" alt="Pejesa">
        <span class="app-brand__text">
          <span class="app-brand__name">Antares</span>
          <span class="app-brand__version">v1.0.0</span>
        </span>
      </a>
      <div class="app-header__actions">
        <a class="app-logout" href="<?php echo constant('URL'); ?>salir/end">Salir</a>
      </div>
    </div>
  </header>

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
        <h2>Bienvenido</h2>

        <?php if (isset($this->mensaje)): ?>
          <div class="callout <?php echo strpos($this->mensaje, 'correctamente') !== false ? 'success' : 'alert'; ?>">
            <?php echo htmlspecialchars($this->mensaje, ENT_QUOTES, 'UTF-8'); ?>
          </div>
        <?php endif; ?>

        <form method="post" action="<?php echo constant('URL').'login/user'; ?>" name="signup-form">
          <!-- Token CSRF para protección -->

          <div class="form-group">
            <label for="txtusuario">Usuario</label>
            <input type="text" name="txtusuario" id="txtusuario" required />
          </div>
          <div class="form-group">
            <label for="txtpassword">Password</label>
            <input type="password" name="txtpassword" id="txtpassword" value="edgar" required />
          </div>
          <button type="submit" class="button success large" name="btnIngresar" value="btnIngresar">Ingresar</button>
        </form>
      </div>
    </div>
  </div>

  <?php require 'views/footer.php'; ?>
