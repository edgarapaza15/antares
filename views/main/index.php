<?php require 'views/header.php'; ?>

<script src="<?php echo constant('URL'); ?>public/js/reloj.js"></script>
<script src="<?php echo constant('URL'); ?>public/js/core/jquery.min.js"></script>

<div class="grid-container">

  <div class="grid-x">
    <div class="cell medium-1">
    </div>
    <div class="cell medium-6">
        <h3>Resumen de la presa</h3>
    </div>

    <h3>
      <div id="date"></div>
      <div id="time"></div>
    </h3>
  </div>

  <div class="grid-x grid-padding-x">

    <div class="cell small-12 medium-6 large-4">
      <div class="card">
        <div class="card-divider align-center">
          Embalse Gallito Ciego
        </div>
        <div class="card-section">
          <ul class="stats-list">
            <li>
              125,456 m3/s <span class="stats-list-label">Caudal Total</span>
            </li>
            <li class="stats-list-positive">
              28.56 m <span class="stats-list-label">Mira</span>
            </li>
            <li class="stats-list-negative">
              6,424 m3/s <span class="stats-list-label">Caudal</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="cell small-12 medium-6 large-4">
      <div class="card">
        <div class="card-divider align-center">
          Bocatoma Talambo Zaña
        </div>
        <div class="card-section">
          <ul class="stats-list">
            <li>
              13,526 Litros <span class="stats-list-label">Caudal Total</span>
            </li>
            <li class="stats-list-positive">
              17,67 m <span class="stats-list-label">Mira</span>
            </li>
            <li class="stats-list-negative">
              2,390 m3/s <span class="stats-list-label">Caudal</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="cell small-12 medium-6 large-4">
      <div class="card">
        <div class="card-divider align-center">
          Bocatoma Jequetepeque
        </div>
        <div class="card-section">
          <ul class="stats-list">
            <li>
              11,352 Litros <span class="stats-list-label">Caudal Total</span>
            </li>
            <li class="stats-list-positive">
              8,45 m <span class="stats-list-label">Mira</span>
            </li>
            <li class="stats-list-negative">
              1,256 m3/s <span class="stats-list-label">Caudal</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- graficos -->
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">

    </div>
    <div class="grid-x">
      <div class="cell small-12 medium-6 large-9">
        <h4>Total Mes-Dia-Hora</h4>
        <!-- POR MES- SE MUESTRA TODOS LOS DATOS DE UN MES EN ESPECIFICO -->
        <div class="grid-x" id="graficos-por-mes">
          <div class="cell small-12 medium-6 large-12">
            <h5>Gallito:</h5>
            <div id="gallito" style="width: 100%;height:300px;"></div>
          </div>
          <div class="cell small-12 medium-6 large-12">
            <h5>Jequetepeque</h5>
            <div id="jequetepeque" style="width: 100%;height:300px;"></div>
          </div>
          <div class="cell small-12 medium-6 large-12">
            <h5>Talambozana</h5>
            <div id="talambozana" style="width: 100%;height:300px;"></div>
          </div>
          <div class="cell small-12 medium-6 large-12">
            <h5>Valvulas</h5>
            <div id="valvulas" style="width: 100%;height:300px;"></div>
          </div>
        </div>
        <!-- hasta aqui los 4 graficos por mes -->

        <div id="mainHoras" style="width: 100%;height:780px;"></div>
        <div id="main" style="width: 100%;height:780px;"></div>
      </div>
      <div class="cell small-12 medium-6 large-3">
        <h4>Formulario para ver</h4>
        <h6>Elija el modo</h6>

        <select name="modo" id="modo">
          <option value="dia">DIA</option>
          <option value="mes">MES</option>
          <option value="hora">HORA</option>
        </select>
        <button class="button" id="btn-filtrar">Filtrar</button>
        <input type="date" id="fecha" hidden style="display:none;">
        <button class="button" id="btn-hora" hidden style="display:none">Elegir dia</button>
        <input type="date" id="fecha-mes" hidden style="display:none;">
        <button class="button" id="btn-mes" hidden style="display:none">Elegir Mes</button>
        <br><br><br><br>
        <h5>Elegir columna para visualizar en los graficos (ESTA PREDETERMINADO CON ESTAS COLUMNAS QUE SE VEN)</h5>
        <select name="gallitoColumna" id="gallitoColumna">
          <option value="volumenCrecidas">volumenCrecidas</option>
          <option value="nivelEmbalse">nivelEmbalse</option>
          <option value="volumenTotal" selected>volumenTotal</option>
          <option value="volumenUtil">volumenUtil</option>
          <option value="caudalTotal">caudalTotal</option>
          <option value="ingresoMiraPaltas">ingresoMiraPaltas</option>
          <option value="ingresoCaudalPaltas">ingresoCaudalPaltas</option>
          <option value="ingresoMiraYonan">ingresoMiraYonan</option>
          <option value="ingresoCaudalYonan">ingresoCaudalYonan</option>
          <option value="salidaMiraE2">salidaMiraE2</option>
          <option value="salidaCaudalE2">salidaCaudalE2</option>
          <option value="salidaMiraMinicentral">salidaMiraMinicentral</option>
          <option value="salidaMiraCGC">salidaMiraCGC</option>
          <option value="salidaCaudalCGC">salidaCaudalCGC</option>
          <option value="salidaMiraCTorta">salidaMiraCTorta</option>
          <option value="salidaCaudalCTorta">salidaCaudalCTorta</option>
          <option value="nivelEmbalseCompensacion">nivelEmbalseCompensacion</option>
          <option value="volumenTotalEmbalse">volumenTotalEmbalse</option>
          <option value="aberturaComp1">aberturaComp1</option>
          <option value="caudalComp1">caudalComp1</option>
          <option value="aberturaComp2">aberturaComp2</option>
          <option value="caudalComp2">caudalComp2</option>
        </select>
        <select name="jequetepequeColumna" id="jequetepequeColumna">
          <option value="alturamira">alturamira</option>
          <option value="nivelembalse">nivelembalse</option>
          <option value="ah1">ah1</option>
          <option value="caudal1">caudal1</option>
          <option value="ah2">ah2</option>
          <option value="caudal2">caudal2</option>
          <option value="ah3">ah3</option>
          <option value="caudal3">caudal3</option>
          <option value="ah4">ah4</option>
          <option value="caudal4">caudal4</option>
          <option value="caudalTotalCRadial">caudalTotalCRadial</option>
          <option value="miraCanalEntrada">miraCanalEntrada</option>
          <option value="ahCanalEntrada">ahCanalEntrada</option>
          <option value="caudalCanalEntrada">caudalCanalEntrada</option>
          <option value="ahCanalEntrada2">ahCanalEntrada2</option>
          <option value="caudalCanalEntrada2">caudalCanalEntrada2</option>
          <option value="caudalTotalCanalEntrada" selected>caudalTotalCanalEntrada</option>
          <option value="miraRevestido">miraRevestido</option>
          <option value="caudalRevestido">caudalRevestido</option>
          <option value="canalAutorizadoRevestido">canalAutorizadoRevestido</option>
        </select>
        <select name="talambozana" id="talambozanaColumna">
          <option value="nivelembalse1">nivelembalse1</option>
          <option value="compuerta4">compuerta4</option>
          <option value="compuerta5">compuerta5</option>
          <option value="compuerta6">compuerta6</option>
          <option value="miracompuertaTalambo">miracompuertaTalambo</option>
          <option value="caudalcompuertaTalambo" selected>caudalcompuertaTalambo</option>
          <option value="compuerta1">compuerta1</option>
          <option value="compuerta2">compuerta2</option>
          <option value="compuerta3">compuerta3</option>
          <option value="miracompuertaGuadalupe">miracompuertaGuadalupe</option>
          <option value="caudalcompuertaGuadalupe">caudalcompuertaGuadalupe</option>
          <option value="compu1">compu1</option>
          <option value="compu2">compu2</option>
          <option value="compu3">compu3</option>
          <option value="compu4">compu4</option>
          <option value="compu5">compu5</option>
          <option value="compu6">compu6</option>
          <option value="comptas">comptas</option>
          <option value="mirapez">mirapez</option>
          <option value="caudalpez">caudalpez</option>
          <option value="miraEscLim">miraEscLim</option>
          <option value="caudalEscLim">caudalEscLim</option>
          <option value="miraBarrajo">miraBarrajo</option>
          <option value="caudalBarrajo">caudalBarrajo</option>
          <option value="miraTalamboG">miraTalamboG</option>
          <option value="caudalTalambozana">caudalTalambozana</option>
          <option value="salidaTalambo">salidaTalambo</option>
        </select>
        <select name="valvulas" id="valvulasColumna">
          <option value="nivelEmbalse">nivelEmbalse</option>
          <option value="aberturaValvula">aberturaValvula</option>
          <option value="caudalValvula">caudalValvula</option>
          <option value="caudalTotalValvula">caudalTotalValvula</option>
          <option value="aberturaValvula2">aberturaValvula2</option>
          <option value="caudalValvula2">caudalValvula2</option>
          <option value="miraAliviadero">miraAliviadero</option>
          <option value="embalseAliviadero">embalseAliviadero</option>
        </select>
        <button class="button" id="filtrar-columnas">Filtrar Por Columnas (tipo de datos)</button>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo CONSTANT("URL"); ?>public/js/graficos/main.js"></script>



<?php include "views/footer.php"; ?>
