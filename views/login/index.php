<?php require 'views/header.php'; ?>

<div class="grid-container">
  <h1>Login</h1>
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
    <button type="submit" class="button" name="btnIngresar" value="btnIngresar">Ingresar</button>
  </form>
</div>


<?php require 'views/footer.php'; ?>