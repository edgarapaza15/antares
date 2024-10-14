<?php require 'views/header.php'; ?>
   <!-- Reporte de fechas para seleccionar -->
  <div class="grid-x">
    <div class="cell large-6">
      <form action="<?php echo constant('URL');?>listtalambo/fecha1" method="post">
        <div class="grid-x">
          <div class="cell small-12 large-2">
            <h3>Reporte</h3>
          </div>
          <div class="cell small-12 large-4">
            Fecha inicial
            <input type="date" name="fecInicial" id="fecInicial" value="<?php echo $hoy = date('Y-m-d');?>">
          </div>
          <div class="cell small-12 large-4">
            Fecha Final
            <input type="date" name="fecFinal" id="fecFinal">
          </div>
          <div class="cell small-12 large-2">
            <button type="submit" name="btnBuscar" id="btnBuscar" class="button large">Buscar</button>
          </div>
        </div>
      </form>
    </div>

    <div class="cell large-6">
      <form action="<?php echo constant('URL');?>listtalambo/Mes" method="post">
        <div class="grid-x">
          <div class="cell small-12 large-3">
            Otros
            <select name="cbomes" id="cbomes">
              <option value="" disabled selected>[Mes]</option>
              <option value="1">Enero</option>
              <option value="2">Febrero</option>
              <option value="3">Marzo</option>
              <option value="4">Abril</option>
              <option value="5">Mayo</option>
              <option value="6">Junio</option>
              <option value="7">Julio</option>
              <option value="8">Agosto</option>
              <option value="9">Setiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
            </select>
          </div>
          <div class="cell small-12 large-3">
            Año
            <select name="cboanio" id="cboanio">
              <option value="<?php echo $anio = date('Y');?>" selected><?php echo $anio = date('Y');?></option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
            </select>
          </div>
          <div class="cell small-12 large-3">
            <button type="submit" name="btnBuscar2" id="btnBuscar2" class="button large success">Buscar</button>
          </div>

        </div>
      </form>
    </div>
  </div>

  <div class="grid-x">
    <h3>OPERACIÓN DIARIA BOCATOMA TALAMBO ZAÑA</h3>

    <table class="tabla2" border="1px">
      <thead>
        <tr><!-- 1 -->
          <th colspan="28">ZONA DE CAPTACION</th>
        </tr>
        <tr><!-- 2 -->
          <th rowspan="3">HORA</th>
          <th colspan="1"><span></span></th>
          <th colspan="5">CANAL TALAMBO ZAÑA</th>
          <th colspan="5">CANAL EMPALME GUADALUPE</th>
          <th colspan="15">RIO JEQUETEPEQUE AGUAS ABAJO BOTAZA</th>
          <th rowspan="3">TOTAL SALIDA (m3/s)</th>
        </tr>
        <tr><!-- 3 -->
          <th rowspan="3">NIVEL DE EMBALSE (m.s.n.m.)</th>
          <th colspan="3">ABERTURA DE COMPUERTAS (m)</th>
          <th rowspan="2">Mira (m)</th>
          <th rowspan="2">Caudal (m3/s)</th>
          <th colspan="3">ABERTURA DE COMPUERTAS (m)</th>
          <th rowspan="2">Mira (m)</th>
          <th rowspan="2">Caudal (m3/s)</th>
          <th colspan="6">ABERTURA DE COMPUERTAS (m)</th>
          <th rowspan="2">Caudal Comptas (m3/s)</th>
          <th colspan="2">V. PEZ</th>
          <th colspan="2">ESC. LIM.</th>
          <th colspan="2">BARRAJO FIJO</th>
          <th rowspan="2">MIRA (m)</th>
          <th rowspan="2">CAUDAL (m3/s)</th>
        </tr>
        <tr><!-- 4 -->
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>MIRA (m)</th>
          <th>CAUDAL (m3/s)</th>
          <th>MIRA (m)</th>
          <th>CAUDAL (m3/s)</th>
          <th>MIRA (m)</th>
          <th>CAUDAL (m3/s)</th>
        </tr>
      </thead>



      <tbody>
        <?php
        include_once "models/dataTalambo.php";

        foreach ($this->datos as $row) {
          $datag = new DataTalambo();
          $datag = $row;

      ?>
        <tr>
          <td><?php echo $datag->hora; ?></td>
          <td><?php echo $datag->nivelembalse1; ?></td>
          <td><?php echo $datag->compuerta4; ?></td>
          <td><?php echo $datag->compuerta5; ?></td>
          <td><?php echo $datag->compuerta6; ?></td>
          <td><?php echo $datag->miracompuertaTalambo; ?></td>
          <td><?php echo $datag->caudalcompuertaTalambo; ?></td>
          <td><?php echo $datag->compuerta1; ?></td>
          <td><?php echo $datag->compuerta2; ?></td>
          <td><?php echo $datag->compuerta3; ?></td>
          <td><?php echo $datag->miracompuertaGuadalupe; ?></td>
          <td><?php echo $datag->caudalcompuertaGuadalupe; ?></td>
          <td><?php echo $datag->compu1; ?></td>
          <td><?php echo $datag->compu2; ?></td>
          <td><?php echo $datag->compu3; ?></td>
          <td><?php echo $datag->compu4; ?></td>
          <td><?php echo $datag->compu5; ?></td>
          <td><?php echo $datag->compu6; ?></td>
          <td><?php echo $datag->comptas; ?></td>
          <td><?php echo $datag->mirapez; ?></td>
          <td><?php echo $datag->caudalpez; ?></td>
          <td><?php echo $datag->miraEscLim; ?></td>
          <td><?php echo $datag->caudalEscLim; ?></td>
          <td><?php echo $datag->miraBarrajo; ?></td>
          <td><?php echo $datag->caudalBarrajo; ?></td>
          <td><?php echo $datag->miraTalamboG; ?></td>
          <td><?php echo $datag->caudalTalambozana; ?></td>
          <td><?php echo $datag->salidaTalambo; ?></td>

        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

<?php require 'views/footer.php'; ?>