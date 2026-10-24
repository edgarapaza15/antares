<?php require 'views/header.php'; ?>

<div class="grid-container">
  <div class="grid-x grid-padding-x">
    <div class="cell small-12 medium-12">
      <h3>Operación Diaria Bocatoma Jequetepeque</h3>
      <div>
        <h3><?php echo $this->mensaje; ?></h3>
      </div>
    </div>
  </div>

  <form action="<?php echo constant('URL') ?>jequetepeque/reporte" method="post">
    <!-- Embalse 1 -->
    <div class="card">

      <div class="grid-x">
        <div class="cell small-12 large-4">
          <?php
          date_default_timezone_set('America/Lima'); // Ajusta la zona horaria si lo necesitas
          $hora_actual = date('H:00'); // Hora actual redondeada hacia abajo (ejemplo: 10:00)
          ?>
        <label for="">
          Hora:
          <select name="hora" id="hora">
              <option value="<?php echo $hora_actual;?>" selected><?php echo $hora_actual;?></option>
              <option value="00:00">00:00</option>
              <option value="01:00">01:00</option>
              <option value="02:00">02:00</option>
              <option value="03:00">03:00</option>
              <option value="04:00">04:00</option>
              <option value="05:00">05:00</option>
              <option value="06:00">06:00</option>
              <option value="07:00">07:00</option>
              <option value="08:00">08:00</option>
              <option value="09:00">09:00</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="12:00">12:00</option>
              <option value="13:00">13:00</option>
              <option value="14:00">14:00</option>
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
              <option value="19:00">19:00</option>
              <option value="20:00">20:00</option>
              <option value="21:00">21:00</option>
              <option value="22:00">22:00</option>
              <option value="23:00">23:00</option>
            </select>
          </label>
        </div>
      </div>

      <div class="grid-x grid-margin-x">
        <div class="cell small-12 medium-8">
          <h3>Embalse</h3>
          <label for="">
            Altura de la Mira (m):
            <input type="text" value="0.0" required name="alturamira" id="alturamira">
          </label>
          <label for="">
            Nivel de embalse (m.s.n.m.):
            <input type="text" value="0.0" required name="nivelembalse" id="nivelembalse">
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
          <span>.</span>
          <h2>1</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" value="0.0" required name="ah1" id="ah1">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" value="0.0" required name="caudal1" id="caudal1">
          </label>
        </div>
        <div class="cell small-12 medium-3">
          <span>.</span>
          <h2>2</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" value="0.0" required name="ah2" id="ah2">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" value="0.0" required name="caudal2" id="caudal2">
          </label>
        </div>

        <!-- sep -->

        <div class="cell small-12 medium-3">
          <span>.</span>
          <h2>3</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" value="0.0" required name="ah3" id="ah3">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" value="0.0" required name="caudal3" id="caudal3">
          </label>
          <hr>

        </div>
        <div class="cell small-12 medium-3">
          <span>.</span>
          <h2>4</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" value="0.0" required name="ah4" id="ah4">
          </label>
          <label for="">
            Caudal (m):
            <input type="text" value="0.0" required name="caudal4" id="caudal4">
          </label>

        </div>

        <div class="cell  small-12 medium-6">
          <label for="">
            Caudal Total(m):
            <input type="text" value="0.0" required name="caudalTotalCRadial" id="caudalTotalCRadial">
          </label>
        </div>
      </div>
    </div>

    <!-- CANAL DE ENTRADA -->
    <div class="card">
      <div class="grid-x grid-margin-x">
        <div class="cell">
          <h3>Canal de Entrada <small>Compuertas Radiales(**)</small></h3>
          <label for="">
            Altura de la Mira (m):
            <input type="text" value="0.0" required name="miraCanalEntrada" id="miraCanalEntrada">
          </label>
        </div>

        <div class="cell small-12 medium-3">
          <span>.</span>
          <h2>1</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" value="0.0" required name="ahCanalEntrada" id="ahCanalEntrada">
          </label>
          <label for="">
            Caudal (m3/s):
            <input type="text" value="0.0" required name="caudalCanalEntrada" id="caudalCanalEntrada">
          </label>
          <hr>

        </div>
        <div class="cell small-12 medium-3">
          <span>.</span>
          <h2>2</h2>
        </div>
        <div class="cell small-12 medium-3">
          <label for="">
            a/h (m):
            <input type="text" value="0.0" required name="ahCanalEntrada2" id="ahCanalEntrada2">
          </label>
          <label for="">
            Caudal (m3/s):
            <input type="text" value="0.0" required name="caudalCanalEntrada2" id="caudalCanalEntrada2">
          </label>
        </div>
        <div class="cell small-12 medium-6">
          <label for="">
            Caudal Total (m3/s):
            <input type="text" value="0.0" required name="caudalTotalCanalEntrada" id="caudalTotalCanalEntrada">
          </label>
        </div>
      </div>
    </div>

    <!-- CANAL DE REVISTIDO -->
    <div class="card">
      <div class="grid-x grid-margin-x">
        <div class="cell">
          <h3>Canal de Revestido</h3>
        </div>

        <div class="cell small-12 medium-6">
          <label for="">
            Altura de la Mira (m):
            <input type="text" required name="miraRevestido" id="miraRevestido" value="0.0">
          </label>
          <label for="">
            Caudal Circulante (m3/s):
            <input type="text" required name="caudalRevestido" id="caudalRevestido" value="0.0">
          </label>
          <label for="">
            Canal Autorizado ALA (m3/s):
            <input type="text" required name="canalAutorizadoRevestido" id="canalAutorizadoRevestido" value="0.0">
          </label>
        </div>
      </div>

    </div>
    <div class="grid-x">
      <div class="cell medium-6">
        <button type="submit" class="button large warning" name="btnGuardar" id="btnGuardar">Guardar todo</button>
      </div>
      <div class="cell medium-6">

      </div>
    </div>
  </form>
</div>

<?php require 'views/footer.php'; ?>