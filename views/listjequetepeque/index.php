<?php require 'views/header.php'; ?>

  <div class="grid-x">
    <div class="cell large-6">
      <form action="<?php echo constant('URL');?>listjequetepeque/fecha1" method="post">
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
      <form action="<?php echo constant('URL');?>listjequetepeque/Mes" method="post">
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
      <caption>OPERACIÓN DIARIA BOCATOMA JEQUETEPEQUE</caption>
      <thead>
        <tr><!-- 1 -->
          <th rowspan="4">HORA</th>
          <th colspan="2">EMBALSE</th>
          <th colspan="9">COMPUERTAS DE REGULACION Y LIMPIA (BARRAJE MOVIL)</th>
          <th colspan="6">CANAL DE ENTRADA</th>
          <th colspan="3">CANAL REVESTIDO</th>
        </tr>
        <tr><!-- 2 -->
          <th rowspan="3">ALTURA DE MIRA (m)</th>
          <th rowspan="3">NIVEL DE EMBALSE (m.s.n.m.)</th>
          <th colspan="8" rowspan="1">COMPUERTAS RADIALES (*)</th>
          <th rowspan="3">CAUDAL TOTAL (m3/s)</th>

          <th rowspan="3">ALTURA DE MIRA (m)</th>
          <th colspan="4" rowspan="1">COMPUERTAS RADIALES (*)</th>
          <th rowspan="3">CAUDAL TOTAL (m3/s)</th>

          <th rowspan="3">ALTURA DE MIRA (m)</th>
          <th rowspan="3">CAUDAL CIRCULANTE (m3/s)</th>
          <th rowspan="3">CAUDAL AUTORIZADO ALA (m3/s)</th>
        </tr>
        <tr><!-- 3 -->
          <th colspan="2">1</th>
          <th colspan="2">2</th>
          <th colspan="2">3</th>
          <th colspan="2">4</th>

          <th colspan="2">1</th>
          <th colspan="2">2</th>
        </tr>
        <tr><!-- 4 -->
          <th>a/h (m)</th>
          <th>Caudal (m3/s)</th>
          <th>a/h (m)</th>
          <th>Caudal (m3/s)</th>
          <th>a/h (m)</th>
          <th>Caudal (m3/s)</th>
          <th>a/h (m)</th>
          <th>Caudal (m3/s)</th>

          <th>a/h (m)</th>
          <th>Caudal (m3/s)</th>
          <th>a/h (m)</th>
          <th>Caudal (m3/s)</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include_once "models/dataJequetepeque.php";

        foreach ($this->datos as $row) {
          $datag = new DataJequetepeque();
          $datag = $row;

      ?>
        <tr>
          <td><?php echo $datag->hora; ?></td>
          <td><?php echo $datag->alturamira; ?></td>
          <td><?php echo $datag->nivelembalse; ?></td>
          <td><?php echo $datag->ah1; ?></td>
          <td><?php echo $datag->caudal1; ?></td>
          <td><?php echo $datag->ah2; ?></td>
          <td><?php echo $datag->caudal2; ?></td>
          <td><?php echo $datag->ah3; ?></td>
          <td><?php echo $datag->caudal3; ?></td>
          <td><?php echo $datag->ah4; ?></td>
          <td><?php echo $datag->caudal4; ?></td>
          <td><?php echo $datag->caudalTotalCRadial; ?></td>
          <td><?php echo $datag->miraCanalEntrada; ?></td>
          <td><?php echo $datag->ahCanalEntrada; ?></td>
          <td><?php echo $datag->caudalCanalEntrada; ?></td>
          <td><?php echo $datag->ahCanalEntrada2; ?></td>
          <td><?php echo $datag->caudalCanalEntrada2; ?></td>
          <td><?php echo $datag->caudalTotalCanalEntrada; ?></td>
          <td><?php echo $datag->miraRevestido; ?></td>
          <td><?php echo $datag->caudalRevestido; ?></td>
          <td><?php echo $datag->canalAutorizadoRevestido; ?></td>
          <!-- <td><?php echo $datag->fecCreate; ?></td>
          <td><?php echo $datag->idpersonal; ?></td> -->

        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

<?php require 'views/footer.php'; ?>