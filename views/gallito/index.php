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

  <form action="../Controllers/gallito.controller.php" method="post" name="frmIngreso" id="frmIngreso">
    <div class="grid-x grid-margin-x">
      <div class=" cell small-12 medium-6">
        <label for="">
          Volumen de Crecidas <span>(Hm3)</span>
          <input type="text" required name="volumenCrecidas" id="volumenCrecidas" value="0.0">
        </label>
        <label for="">
          Nivel de embalse <span>(m.s.n.m.)</span>
          <input type="text" required name="nivelEmbalse" id="nivelEmbalse">
        </label>
        <label for="">
          Volumen Total <span>(Hm3)</span>
          <input type="text" required name="volumenTotal" id="volumenTotal">
        </label>
        <label for="">
          <button type="button" class="button" name="btnCalcular1" id="btnCalcular1">Calcular</button>
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
      <div class="grid-x grid-padding-x grid-margin-y">
        <div class="cell medium-12">
          <h3>Ingreso</h3>
        </div>
        <div class="row small-12 medium-6">

        </div>
        <div class="row small-12 medium-6">

        </div>
        <div class="cell medium-3">
          <h4>Estación Paltas</h4>
          <img src="https://placehold.it/120" alt="Estacion Paltas">
        </div>
        <div class="cell medium-3">
          <label for="">
            Mira (m)
            <input type="text" required name="ingresoMiraPalta" id="ingresoMiraPalta">
          </label>
          <label for="">
            <button type="button" class="button" name="btnPaltas" id="btnPaltas">Calcular</button>
          </label>
          <label for="">
            Caudal (m3/s)
            <input type="text" required name="ingresoCaudalPaltas" id="ingresoCaudalPaltas">
          </label>
        </div>
        <div class="cell medium-3">
          <h4>Estación Yonán</h4>
          <img src="https://placehold.it/120" alt="Estacion Yonán">
        </div>
        <div class="cell medium-3">
          <label for="">
            Mira (m)
            <input type="text" required name="ingresoMiraYonan" id="ingresoMiraYonan">
          </label>
          <label for="">
            <button type="button" class="button" name="btnYonan" id="btnYonan">Calcular</button>
          </label>
          <label for="">
            Caudal (m3/s)
            <input type="text" required name="ingresoCaudalYonan" id="ingresoCaudalYonan">
          </label>
        </div>

      </div>
    </div>

    <!-- Formulario Salidas -->

    <div class="card">
      <div class="grid-x grid-padding-x grid-margin-y">
        <div class="cell medium-12">
          <h3>Canal de descarga</h3>
        </div>


        <div class="cell medium-3">
          <h4>Estación N° 2</h4>
          <img src="https://placehold.it/120" alt="Estacion N° 2">
        </div>
        <div class="cell medium-3">
          <label for="">
            Mira (m)
            <input type="text" required name="salidaMiraE2" id="salidaMiraE2">
          </label>

          <label for="">
            <button type="button" class="button" name="btnEstacion2" id="btnEstacion2">Calcular</button>
          </label>

          <label for="">
            Caudal (m3/s)
            <input type="text" required name="salidaCaudalE2" id="salidaCaudalE2">
          </label>
        </div>

        <div class="cell medium-3">
          <h4>Canal Minicentral</h4>
          <img src="https://placehold.it/120" alt="Canal Minicentral">
        </div>
        <div class="cell medium-3">
          <label for="">
            Mira (m)
            <input type="text" required name="salidaMiraMinicentral" id="salidaMiraMinicentral">
          </label>

          <label for="">
            <button type="button" class="button" name="btnMiniCentral" id="btnMiniCentral">Calcular</button>
          </label>

          <label for="">
            Caudal (m3/s)
            <input type="text" required name="salidaCaudalMinicentral" id="salidaCaudalMinicentral">
          </label>
        </div>


        <div class="cell medium-3">
          <h4>Canal Gallito Ciego</h4>
          <img src="https://placehold.it/120" alt="Canal Gallito Ciego">
        </div>
        <div class="cell medium-3">
          <label for="">
            Mira (m)
            <input type="text" required name="salidaMiraCGC" id="salidaMiraCGC">
          </label>

          <label for="">
            <button type="button" class="button" name="btncanalgc" id="btncanalgc">Calcular</button>
          </label>

          <label for="">
            Caudal (m3/s)
            <input type="text" required name="salidaCaudalCGC" id="salidaCaudalCGC">
          </label>
        </div>



        <div class="cell medium-3">
          <h4>Canal Casa Torta</h4>
          <img src="https://placehold.it/120" alt="Canal Casa Torta">
        </div>
        <div class="cell medium-3">
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
          <button type="button" class="button" name="btnCaudaltotal-e" id="btnCaudaltotal-e">Calcular</button>
        </label>
        CAUDAL TOTAL (m3/s)
        <input type="text" required name="caudalTotal-e" id="caudalTotal-e">
      </label>

    </div>

    <div class="grid-x grid-padding-x grid-margin-x">
      <div class="cell medium-6">
        <div class="card grid-padding-x">
          <h4>Embalse de Compensación</h4>
          <label for="">
            Nivel de Embalse (m.s.n.m.)
            <input type="text" required name="nivelEmbalseCompensacion" id="nivelEmbalseCompensacion">
          </label>
          <label for="">
            Volumen Total (Hm3)
            <input type="text" required name="volumenTotalEmbalse" id="volumenTotalEmbalse">
          </label>
        </div>
      </div>
    </div>

    <div class="grid-x grid-padding-x grid-margin-x">
      <div class="cell medium-6">
        <div class="card grid-padding-x">
          <h4>Compuertas</h4>
          <p>N° 01</p>
          <label for="">
            Abertura
            <input type="text" required name="aberturaComp1" id="aberturaComp1">
          </label>
          <label for="">
            Volumen Total (Hm3)
            <input type="text" required name="caudalComp1" id="caudalComp1">
          </label>
        </div>
      </div>
      <div class="cell medium-6">
        <div class="card grid-padding-x">
          <p>N° 02</p>
          <label for="">
            Abertura
            <input type="text" required name="aberturaComp2" id="aberturaComp2">
          </label>
          <label for="">
            Volumen Total (Hm3)
            <input type="text" required name="caudalComp2" id="caudalComp2">
          </label>
        </div>
      </div>
      <div class="cell medium-6">

      </div>

      <div class="cell small-12 medium-6">
        <label for="">
          Caudal total <span>(m3/s)</span>
          <input type="text" required name="caudalTotal" id="caudalTotal">
        </label>
      </div>

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