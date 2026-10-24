<?php require 'views/header.php';
$fecha = date('d-m-Y');
$hora = date('H:i:s');
?>

<div class="grid-container">
  <div class="grid-x grid-padding-x grid-margin-y">
    <div class="cell small-12 medium-6 large-8">
      <h1>Operacion del Embalse Gallito Ciego</h1>
      <p>Fecha: <?php echo $fecha; ?> - Hora: <?php echo $hora; ?> </p>
    </div>
  </div>

  <div>
    <h3><?php echo $this->mensaje; ?></h3>
  </div>

  <form action="<?php echo constant('URL'); ?>gallito/reporte" method="post" name="frmIngreso" id="frmIngreso">
    <div class="grid-x grid-margin-x">
      <div class=" cell small-12 medium-3 large-3">
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
        <label for="">
          Volumen de Crecidas <span>(Hm3)</span>
          <input type="text" required name="volumenCrecidas" id="volumenCrecidas" value="0.0">
        </label>
        <label for="">
          Nivel de embalse (m.s.n.m.)
          <input type="text" required name="nivelEmbalse" id="nivelEmbalse" value="0.0">
        </label>
        <label for="">
          Volumen Total <span>(Hm3)</span>
          <input type="text" required name="volumenTotal" id="volumenTotal" value="0.0">
        </label>
        <label for="">
          Laminación de Embalse (m3/s)
          <input type="text" required name="laminacionGallito" id="laminacionGallito" value="0.0">
        </label>
        <label for="">
          <button type="button" class="button" name="btnCalcular1" id="btnCalcular1">Calcular (Obligatorio)</button>
        </label>
        <label for="">
          Volumen Util <span>(Hm3)</span>
          <input type="text" required name="volumenUtil" id="volumenUtil">
        </label>
      </div>

    </div>

    <hr>
    <!-- Formulario Ingreso -->

    <div class="card">
      <div class="grid-x grid-padding-y">
        <div class="cell medium-12">

        </div>
        <div class="row small-12 medium-6">
          <h5>ESTACION DE INGRESO LAS PALTAS</h5>
          <label for="">
            Mira (m)
            <input type="text" required name="ingresoMiraPaltas9" id="ingresoMiraPaltas9" value="0.0">
          </label>
          <label for="">
            <button type="button" class="button" name="btnLasPaltas" id="btnLasPaltas">Calcular</button>
          </label>
          <label for="">
            Caudal (m3/s)
            <input type="text" required name="ingresoCaudalPaltas" id="ingresoCaudalPaltas" value="0">
          </label>
        </div>

        <div class="row small-12 medium-6">
          <h5>ESTACION DE INGRESO YONAN</h5>
          <label for="">
            Mira (m)
            <input type="text" required name="ingresoMiraYonan" id="ingresoMiraYonan" value="0.0">
          </label>
          <label for="">
            <button type="button" class="button" name="btnIngresoYonan" id="btnIngresoYonan">Calcular</button>
          </label>
          <label for="">
            Caudal (m3/s)
            <input type="text" required name="ingresoCaudalYonan" id="ingresoCaudalYonan" value="0">
          </label>
        </div>
      </div>
    </div>

    <!-- Formulario Salidas -->

    <div class="card">
      <div class="grid-x grid-padding-x grid-margin-y">
        <div class="cell small-12 medium-6">
          <h5>CANAL DE DESCARGA ESTACION N° 2</h5>
          <label for="">
            Mira (m)
            <input type="text" required name="salidaMiraE2" id="salidaMiraE2" value="0.0">
          </label>

          <label for="">
            <button type="button" class="button" name="btnEstacion2" id="btnEstacion2">Calcular</button>
          </label>

          <label for="">
            Caudal (m3/s)
            <input type="text" required name="salidaCaudalE2" id="salidaCaudalE2" value="0">
          </label>
        </div>

        <div class="cell small-12 medium-6">
          <h5>CANAL MINICENTRAL</h5>
          <label for="">
            Mira (m)
            <input type="text" required name="salidaMiraMinicentral" id="salidaMiraMinicentral" value="0.0">
          </label>

          <label for="">
            <button type="button" class="button" name="btnMiniCentral" id="btnMiniCentral">Calcular</button>
          </label>

          <label for="">
            Caudal (m3/s)
            <input type="text" required name="salidaCaudalMinicentral" id="salidaCaudalMinicentral" value="0">
          </label>
        </div>


        <div class="cell small-12 medium-6">
          <h4>Canal Gallito Ciego</h4>
          <label for="">
            Mira (m)
            <input type="text" required name="salidaMiraCGC" id="salidaMiraCGC" value="0.080">
          </label>
          <label for="">
            Caudal (m3/s)
            <input type="text" required name="salidaCaudalCGC" id="salidaCaudalCGC" value="0.042">
          </label>
        </div>
        <div class="cell small-12 medium-6">
          <h4>Canal Casa Torta</h4>
          <label for="">
            Mira (m)
            <input type="text" required name="salidaMiraCTorta" id="salidaMiraCTorta" value="s/m">
          </label>
          <label for="">
            Caudal (m3/s)
            <input type="text" required name="salidaCaudalCTorta" id="salidaCaudalCTorta" value="0.060">
          </label>
        </div>

      </div>

      <label for="">
        <label for="">
          <button type="button" class="button success large" name="btnCaudaltotal" id="btnCaudaltotal">CALCULAR CAUDAL TOTAL</button>
        </label>
        CAUDAL TOTAL (m3/s)
        <input type="text" required name="caudalTotal" id="caudalTotal">
      </label>

    </div>

    <!-- EMBALSE DE COMPENSACION -->

    <div class="grid-x grid-padding-x grid-margin-x">
      <div class="cell medium-6">
        <div class="card grid-padding-x">
          <h4>Embalse de Compensación</h4>
          <label for="">
            Nivel de Embalse (m.s.n.m.)
            <input type="text" required name="nivelEmbalseCompensacion" id="nivelEmbalseCompensacion" value="0.0">
          </label>
          <label for="">
            Volumen Total (Hm3)
            <input type="text" required name="volumenTotalEmbalse" id="volumenTotalEmbalse" value="0.0">
          </label>
        </div>
      </div>
    </div>

    <div class="grid-x grid-padding-x grid-margin-x">
      <div class="cell medium-6">
        <div class="card grid-padding-x">
          <h5>Compuertas N° 01</h5>

          <label for="">
            Abertura
            <input type="text" required name="aberturaComp1" id="aberturaComp1" value="0.0">
          </label>
          <label for="">
            CAUDAL
            <input type="text" required name="caudalComp1" id="caudalComp1" value="0.0">
          </label>
        </div>
      </div>
      <div class="cell medium-6">
        <div class="card grid-padding-x">
          <h5>Compuertas N° 02</h5>

          <label for="">
            1.01
            <input type="text" required name="aberturaComp2" id="aberturaComp2" value="0.0">
          </label>
          <label for="">
            CAUDAL
            <input type="text" required name="caudalComp2" id="caudalComp2" value="0.0">
          </label>
        </div>
      </div>



      <div class="cell medium-6">
        <button type="submit" class="button warning large" name="btnGuardar" id="btnGuardar">Guardar TODO</button>
      </div>
      <div class="cell medium-6">
        <!-- <button type="button" class="button large success" name="btnActualizar" id="btnActualizar">Actualizar</button> -->
      </div>
    </div>
  </form>
</div>

<?php require 'views/footer.php'; ?>
<script src="<?php echo constant('URL');?>public/js/gallito.js"></script>
