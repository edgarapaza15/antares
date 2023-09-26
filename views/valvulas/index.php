<?php require 'views/header.php' ?>

<div class="grid-container grid-container-padded">
  <div class="grid-x grid-margin-y">
    <div class="cell">
      <h3>OPERACIÓN DIARIA VÁLVULAS HOWELL BUNGER Y ALIVIADERO DE CRECIDAS</h3>
      <p>Fecha: 08/05/2023 - Hora: 08:05:00</p>
    </div>

    <form action="../Controllers/valvulas.controller.php" method="post">
      <div class="cell">
        <label for="">
          Nivel de embalse (m.s.n.m.):
          <input type="text" required name="nivelEmbalse" id="nivelEmbalse">
        </label>
      </div>
      <!-- VALVULAS HOWELL BUNGER -->
      <div class="card">
        <div class="grid-x grid-padding-x">
          <div class="cell">
            <h3>Valvulas Howell Bunger</h3>
          </div>
          <div class="cell small-12 medium-3">
            <h2>VAL. N°1</h2>
          </div>
          <div class="cell small-12 medium-3">
            <label for="">
              Abertura (m):
              <input type="text" required name="aberturaValvula" id="aberturaValvula">
            </label>
            <label for="">
              Caudal (m3/s):
              <input type="text" required name="caudalValvula" id="caudalValvula">
            </label>
            <label for="">
              Caudal total (m3/s):
              <input type="text" required name="caudalTotalValvula" id="caudalTotalValvula">
            </label>
          </div>
          <div class="cell small-12 medium-3">
            <h2>VAL. N°2</h2>
          </div>
          <div class="cell small-12 medium-3">
            <label for="">
              Abertura (m):
              <input type="text" required name="aberturaValvula2" id="aberturaValvula2">
            </label>
            <label for="">
              Caudal (m3/s):
              <input type="text" required name="caudalValvula2" id="caudalValvula2">
            </label>
          </div>
        </div>
      </div>

      <!-- ALIVIADERO DE CRECIDAS -->
      <div class="card">
        <div class="grid-x grid-padding-x">
          <div class="cell medium-12">
            <h3>Aliviadero de Crecidas</h3>
          </div>
          <div class="cell small-12 medium-6">
            <label for="">
              Altura de la mira (m):
              <input type="text" required name="miraAliviadero" id="miraAliviadero">
            </label>
            <label for="">
              Nivel de embalse (m.s.n.m.):
              <input type="text" required name="embalseAliviadero" id="embalseAliviadero">
            </label>
          </div>
          <div class="cell small-12 medium-6">
          </div>
        </div>
      </div>

      <div class="grid-x">
        <div class="cell small-12 medium-6">
          <button type="submit" name="btnGuardar" id="btnGuardar" class="button large">Guardar</button>
        </div>
      </div>
    </form>


  </div>


</div>

<?php require 'views/footer.php' ?>