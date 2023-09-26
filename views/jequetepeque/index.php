<?php require 'views/header.php'; ?>

<div class="grid-container">
  <div class="grid-x grid-padding-x">
    <div class="cell small-12 medium-12">
      <h3>Operación Diaria Bocatoma Jequetepeque</h3>
      <p>Fecha: 08/08/2023 - Hora: 08:00:00</p>
    </div>
  </div>

  <form action="../Controllers/jequetepeque.controller.php" method="post">
    <!-- Embalse 1 -->
    <div class="card">
      <div class="grid-x grid-margin-x">
        <div class="cell small-12 medium-8">
          <h3>Embalse</h3>
          <label for="">
            Altura de la Mira (m):
            <input type="text" required name="alturamira" id="alturamira">
          </label>
          <label for="">
            Nivel de embalse (m.s.n.m.):
            <input type="text" required name="nivelembalse" id="nivelembalse">
          </label>
        </div>
        <div class="cell small-12 medium-4"></div>
      </div>
    </div>
    <!-- end embalse -->

    <!-- Compuertas de Regulacion -->
    <div class="card">
      <div class="grid-x grid-margin-x">
        <div class="cell">
          <h3>COMPUERTAS DE REGULACIÓN Y LIMPIA (BARRAJE MOVIL) <small>Compuertas Radiales (*)</small></h3>
        </div>

        <div class="cell small-12 medium-3">
          <h2>1</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" required name="ah1" id="ah1">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" required name="caudal1" id="caudal1">
          </label>
        </div>
        <div class="cell small-12 medium-3">
          <h2>2</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" required name="ah2" id="ah2">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" required name="caudal2" id="caudal2">
          </label>
        </div>

        <!-- sep -->

        <div class="cell small-12 medium-3">
          <h2>3</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" required name="ah3" id="ah3">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" required name="caudal3" id="caudal3">
          </label>
          <label for="">
            Caudal Total (m):
            <input type="text" required name="caudalTotalCRadial" id="caudalTotalCRadial">
          </label>
        </div>
        <div class="cell small-12 medium-3">
          <h2>4</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" required name="ah4" id="ah4">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" required name="caudal4" id="caudal4">
          </label>

        </div>
      </div>
    </div>

    <!-- CANAL DE ENTRADA -->
    <div class="card">
      <div class="grid-x grid-margin-x">
        <div class="cell">
          <h3>Canal de Entrada <small>Compuertas Radiales(**)</small></h3>
        </div>

        <div class="cell small-12 medium-3">
          <h2>1</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            Altura de la Mira (m):
            <input type="text" required name="miraCanalEntrada" id="miraCanalEntrada">
          </label>
          <label for="">
            a/h (m):
            <input type="text" required name="ahCanalEntrada" id="ahCanalEntrada">
          </label>
          <label for="">
            Caudal (m3/s):
            <input type="text" required name="caudalCanalEntrada" id="caudalCanalEntrada">
          </label>
          <label for="">
            Caudal Total (m3/s):
            <input type="text" required name="caudalTotalCanalEntrada" id="caudalTotalCanalEntrada">
          </label>
        </div>
        <div class="cell small-12 medium-3">
          <h2>2</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" required name="ahCanalEntrada2" id="ahCanalEntrada2">
          </label>
          <label for="">
            Caudal (m3/s):
            <input type="text" required name="caudalCanalEntrada2" id="caudalCanalEntrada2">
          </label>
        </div>
      </div>
    </div>

    <!-- CANAL DE REVISTIDO -->
    <div class="card">
      <div class="grid-x grid-margin-x">
        <div class="cell">
          <h3>Canal de Revistido</h3>
        </div>

        <div class="cell small-12 medium-6">
          <label for="">
            Altura de la Mira (m):
            <input type="text" required name="miraRevestido" id="miraRevestido">
          </label>
          <label for="">
            Caudal Circulante (m3/s):
            <input type="text" required name="caudalRevestido" id="caudalRevestido">
          </label>
          <label for="">
            Canal Autorizado ALA (m3/s):
            <input type="text" required name="canalAutorizadoRevestido" id="canalAutorizadoRevestido">
          </label>
        </div>
      </div>

    </div>
    <div class="grid-x">
      <div class="cell medium-6">
        <button type="submit" class="button large" name="btnGuardar" id="btnGuardar">Guardar</button>
      </div>
      <div class="cell medium-6">

      </div>
    </div>
  </form>
</div>

<?php require 'views/footer.php'; ?>