<?php require 'views/header.php'; ?>

<div class="grid-container">
  <div class="grid-x grid-padding-x grid-margin-y">
    <div class="cell small-12 medium-12">
      <h2>Operación Diaria Bocatoma Talambo Zaña</h2>
      <p>Fecha: 07/08/2023 hora : 7:00:00</p>
      <p>Total de Salida: 321 (m3/s)</p>
      <p>Nivel de Embalse: 234534 (m.s.n.m)</p>
    </div>

  </div>

  <form action="../Controllers/talambozana.controller.php" method="post" id="formTalambo">
    <!-- CANALES TALAMBO ZAÑA Y GUADALUPE -->
    <div class="card">
      <div class="grid-x grid-padding-x grid-margin-y">
        <div class="cell medium-12">
          <h3>Ingreso</h3>
        </div>

        <div class="cell medium-3">
          <h3>Canal Talambo Zaña</h3>
          <h4>Apertura de Compuertas</h4>
          <img src="https://placehold.it/120" alt="Apertura de Compuertas">
        </div>
        <div class="cell medium-3">
          <label for="">
            Compuerta 4:
            <input type="text" required name="compuerta4" id="compuerta4">
          </label>
          <label for="">
            Compuerta 5:
            <input type="text" required name="compuerta5" id="compuerta5">
          </label>
          <label for="">
            Compuerta 6:
            <input type="text" required name="compuerta6" id="compuerta6">
          </label>
          <label for="">
            Mira:
            <input type="text" required name="miracompuertaTalambo" id="miracompuertaTalambo">
          </label>
          <label for="">
            Caudal:
            <input type="text" required name="caudalcompuertaTalambo" id="caudalcompuertaTalambo">
          </label>
        </div>
        <div class="cell medium-3">
          <h3>Canal Empalme Guadalupe</h3>
          <h4>Abertura de Compuertas</h4>
          <img src="https://placehold.it/120" alt="Abertura de compuertas">
        </div>
        <div class="cell medium-3">
          <label for="">
            Compuerta 1:
            <input type="text" required name="compuerta1" id="compuerta1">
          </label>
          <label for="">
            Compuerta 2:
            <input type="text" required name="compuerta2" id="compuerta2">
          </label>
          <label for="">
            Compuerta 3:
            <input type="text" required name="compuerta3" id="compuerta3">
          </label>
          <label for="">
            Mira:
            <input type="text" required name="miracompuertaGuadalupe" id="miracompuertaGuadalupe">
          </label>
          <label for="">
            Caudal:
            <input type="text" required name="caudalcompuertaGuadalupe" id="caudalcompuertaGuadalupe">
          </label>
        </div>

      </div>
    </div>

    <!-- RIO JEQUETEPEQUE AGUAS ABAJO -->
    <div class="card">
      <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-12">
          <h4>Rio Jequetepeque Aguas Abajo</h4>
        </div>
        <div class="cell small-12 medium-4">

        </div>
        <div class="cell small-12 medium-4">
          1:
          <input type="text" required name="compu1" id="compu1">
          2:
          <input type="text" required name="compu2" id="compu2">
          3:
          <input type="text" required name="compu3" id="compu3">
        </div>
        <div class="cell small-12 medium-4">
          4:
          <input type="text" required name="compu4" id="compu4">
          5:
          <input type="text" required name="compu5" id="compu5">
          6:
          <input type="text" required name="compu6" id="compu6">
        </div>
        <!-- sep -->
        <div class="cell small-12 medium-4">

        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Comptas:
            <input type="text" required name="comptas" id="comptas">
          </label>
          <label for="">
            Mira:
            <input type="text" required name="miraRioJ" id="miraRioJ">
          </label>
          <label for="">
            Caudal:
            <input type="text" required name="caudalRioJ" id="caudalRioJ">
          </label>
        </div>
        <div class="cell small-12 medium-4">

        </div>

        <!-- sep -->

        <div class="cell small-12 medium-4">
          <h4>V.PEZ</h4>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Mira:
            <input type="text" required name="mirapez" id="mirapez">
          </label>
          <label for="">
            Caudal:
            <input type="text" required name="caudalpez" id="caudalpez">
          </label>
        </div>
        <div class="cell small-12 medium-4">

        </div>

        <!-- sep -->
        <div class="cell small-12 medium-4">
          <h4>ESC. LIM.</h4>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Mira:
            <input type="text" required name="miraEscLim" id="miraEscLim">
          </label>
          <label for="">
            Caudal:
            <input type="text" required name="caudalEscLim" id="caudalEscLim">
          </label>
        </div>
        <div class="cell small-12 medium-4">

        </div>
        <!-- sep -->
        <div class="cell small-12 medium-4">
          <h4>BARRAJE FIJO</h4>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Mira:
            <input type="text" required name="miraBarraje" id="miraBarraje">
          </label>
          <label for="">
            Caudal:
            <input type="text" required name="caudalBarraje" id="caudalBarraje">
          </label>
        </div>
        <div class="cell small-12 medium-4">

        </div>
      </div>
    </div>

    <div class="grid-x grid-padding-x">

      <div class="cell medium-6">
        <button type="submit" class="button large" name="btnGuardar" id="btnGuardar">Guardar</button>
      </div>
      <div class="cell medium-6">
        <!-- <button type="button" class="button large success" name="btnActualizar" id="btnActualizar">Actualizar</button> -->
      </div>
    </div>
  </form>
</div>

<?php require 'views/footer.php'; ?>