<?php require 'views/header.php'; ?>

<div class="grid-container">
  <div class="grid-x grid-padding-x grid-margin-y">
    <div class="cell small-12 medium-12">
      <h2>Operación Diaria Bocatoma Talambo Zaña</h2>
    </div>
    <div>
      <h3><?php echo $this->mensaje; ?></h3>
    </div>
  </div>

  <form action="<?php echo constant('URL'); ?>talambozana/reporte" method="post" id="formTalambo">
    <!-- CANALES TALAMBO ZAÑA Y GUADALUPE -->
    <div class="card">
      <div class="grid-x grid-padding-x grid-margin-y">
        <div class="cell medium-12">
          <h3>Ingreso</h3>
          <label for="">
            Hora:
            <select name="hora" id="hora">
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
          <label for="">
            Nivel de embalse (m.s.n.m.):
            <input type="number" required name="nivelembalse1" id="nivelembalse1" value="175.40">
          </label>
        </div>

        <!-- canal talambo zaña -->
        <div class="cell small-12 medium-12">
          <h3>Canal Talambo Zaña</h3>
        </div>
        <div class="cell small-12 medium-6">
          <h5>Apertura de Compuertas (m)</h5>
          <div class="grid-x">
            <div class="cell small-12 medium-4">
              <label for="">
                4:
                <input type="text" required name="compuerta4" id="compuerta4" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-4">
              <label for="">
                5:
                <input type="text" required name="compuerta5" id="compuerta5" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-4">
              <label for="">
                6:
                <input type="text" required name="compuerta6" id="compuerta6" value="0.0">
              </label>
            </div>
          </div>
        </div>

        <div class="cell small-12 medium-6">
          <label for="">
            Mira(m):
            <input type="text" required name="miracompuertaTalambo" id="miracompuertaTalambo" value="">
          </label>

          <label for="">
            <button type="button" class="button" name="btnCanalTalambo" id="btnCanalTalambo">Calcular</button>
          </label>

          <label for="">
            Caudal(m3/s):
            <input type="text" required name="caudalcompuertaTalambo" id="caudalcompuertaTalambo">
          </label>
        </div>

        <!-- canal empalme guadalupe -->
        <div class="cell small-12 medium-12">
          <h3>Canal Empalme Guadalupe</h3>

        </div>

        <div class="cell small-12 medium-6">
          <h5>Abertura de Compuertas</h5>
          <div class="grid-x">
            <div class="cell small-12 medium-4">
              <label for="">
                1:
                <input type="text" required name="compuerta1" id="compuerta1" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-4">
              <label for="">
                2:
                <input type="text" required name="compuerta2" id="compuerta2" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-4">
              <label for="">
                3:
                <input type="text" required name="compuerta3" id="compuerta3" value="0.0">
              </label>
            </div>
          </div>
        </div>
        <div class="cell small-12 medium-6">
          <label for="">
            Mira:
            <input type="text" required name="miracompuertaGuadalupe" id="miracompuertaGuadalupe" value="">
          </label>
          <label for="">
            <button type="button" class="button" name="btnEmpalmeguadalupe" id="btnEmpalmeguadalupe">Calcular</button>
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
          <h3>RIO JEQUETEPEQUE AGUAS ABAJO</h3>
        </div>
        <div class="cell small-12 medium-12">
          <h5>ABERTURA DE COMPUERTAS (m)</h5>
          <div class="grid-x">
            <div class="cell small-12 medium-2">
              <label for="">
                1:
                <input type="text" required name="compu1" id="compu1" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-2">
              <label for="">
                2:
                <input type="text" required name="compu2" id="compu2" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-2">
              <label for="">
                3:
                <input type="text" required name="compu3" id="compu3" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-2">
              <label for="">
                4:
                <input type="text" required name="compu4" id="compu4" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-2">
              <label for="">
                5:
                <input type="text" required name="compu5" id="compu5" value="0.0">
              </label>
            </div>
            <div class="cell small-12 medium-2">
              <label for="">
                6:
                <input type="text" required name="compu6" id="compu6" value="0.0">
              </label>
            </div>
          </div>
        </div>
        <div class="cell small-12 medium-12">
          <label for="">
            Caudal compuertas:
            <input type="text" required name="comptas" id="comptas" value="1.175">
          </label>
        </div>
      </div>

      <!-- v. pez -->
      <div class="grid-x grid-padding-x">

        <div class="cell small-12 medium-4">
          <span>.</span>
          <h4>V.PEZ</h4>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Mira:
            <input type="text" required name="mirapez" id="mirapez" value="0.0">
          </label>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Caudal:
            <input type="text" required name="caudalpez" id="caudalpez" value="0.0">
          </label>
        </div>
        <div class="cell small-12 medium-4">
          <span>.</span>
          <h4>ESC. LIM.</h4>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Mira:
            <input type="text" required name="miraEscLim" id="miraEscLim" value="0.500">
          </label>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Caudal:
            <input type="text" required name="caudalEscLim" id="caudalEscLim" value="10.189">
          </label>
        </div>
        <div class="cell small-12 medium-4">
          <span>.</span>
          <h4>BARRAJO FIJO</h4>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Mira:
            <input type="text" required name="miraBarrajo" id="miraBarrajo" value="0.0">
          </label>
        </div>
        <div class="cell small-12 medium-4">
          <label for="">
            Caudal:
            <input type="text" required name="caudalBarrajo" id="caudalBarrajo" value="0.0">
          </label>
        </div>
      </div>
      <!-- sep -->
      <div class="cell small-12 medium-6">
        <span>.</span>
        <label for="">
          Mira(m):
          <input type="text" required name="miraTalamboG" id="miraTalamboG" value="">
        </label>
      </div>
      <div class="cell small-12 medium-6">
        <label for="">
          CAUDAL(m3/s):
          <input type="text"  name="caudalTalambozanaG1" id="caudalTalambozanaG1" value="" required>
        </label>

        <label for="">
          <button type="button" class="button success" name="btnSalidaTotal" id="btnSalidaTotal">Calcular Salida Total</button>
        </label>


        <label for="">
          TOTAL SALIDA (m3/s):
          <input type="text" name="salidaTalambo" id="salidaTalambo">
        </label>

      </div>
    </div>
    <hr>
    <div class="grid-x">
      <div class="cell medium-6">
        <button type="submit" class="button large warning" name="btnGuardar" id="btnGuardar">Guardar todo</button>
      </div>
      <div class="cell medium-6">
        <!-- <button type="button" class="button large success" name="btnActualizar" id="btnActualizar">Actualizar</button> -->
      </div>
    </div>
  </form>
</div>

<?php require 'views/footer.php'; ?>
<script src="<?php echo constant('URL');?>public/js/talambo.js"></script>