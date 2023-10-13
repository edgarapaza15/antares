<?php require 'views/header.php'; ?>

<div class="grid-container">
  <div class="grid-x">
    <div class="cell small-6">
      <div class="thumbnail imagen">
        <img src="<?php echo constant('URL')?>public/img/represa3.jpg" alt="Represa">
      </div>
    </div>
    <div class="cell small-6 gris">
      <div class="thumbnail center">
        <img src="<?php echo constant('URL')?>public/img/pejesa.jpg" alt="Logo Pejesa" width="70%">
      </div>
      <h1>Bienvenido</h1>
      <?php echo $this->mensaje; ?>

      <form method="post" action="<?php echo constant('URL') ?>login/user" name="signup-form">
        <div class="">
          <label>Email</label>
          <input type="email" name="email" required value="uno@uno.com" />
        </div>
        <div class="">
          <label>Password</label>
          <input type="password" name="password" required value="123" />
        </div>
        <div class="">
          <label>Recordarme</label>
          <input type="checkbox" name="recordarme"/>
        </div>
        <button type="submit" class="button success large" name="btnIngresar" value="btnIngresar">Ingresar</button>
      </form>
      <p class="text-center">No tienes cuenta? <a href="">Registrate</a></p>
    </div>
  </div>
</div>


<?php require 'views/footer.php'; ?>