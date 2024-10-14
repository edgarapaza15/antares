<?php require 'views/header.php'; ?>

  <div class="grid-x">
    <div class="cell large-6">
      <form action="<?php echo constant('URL');?>listgallito/fecha1" method="post">
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
      <form action="<?php echo constant('URL');?>listgallito/otro" method="post">
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
    <?php
    if(empty($this->mensaje))
    {
      #echo "vacio";
    }else{
      echo "
      <div class='cell large-6'>
        <div data-closable class='alert-box callout warning'>
          <i class='fa fa-exclamation-triangle'></i> AVISO: ".$this->mensaje."
          <button class='close-button' aria-label='Dismiss alert' type='button' data-close>
            <span aria-hidden='true'>&CircleTimes;</span>
          </button>
        </div>
      </div>
      ";
    }
    ?>

    <div class="cell">
      <table class="stack" border="1px">
        <thead>
          <tr><!-- 1 -->
            <th colspan="25">EMBALSE GALLITO CIEGO</th>
          </tr>
          <tr><!-- 2 -->
            <th rowspan="4">HORA</th>
            <th colspan="20"><span></span></th>
            <th colspan="4">COMPUERTAS</th>
          </tr>
          <tr><!-- 3 -->
            <th rowspan="3">VOLUMEN DE CRECIDAS (Hm3)</th>
            <th rowspan="3">LAMINACION DEL EMBALSE (M3/S)</th>
            <th rowspan="3">NIVEL DE EMBALSE (m.s.n.m)</th>
            <th rowspan="3">VOLUMEN TOTAL (Hm3)</th>
            <th rowspan="3">VOLUMEN UTIL (Hm3)</th>
            <th colspan="2">ESTACION DE INGRESO LAS PALTAS</th>
            <th colspan="2">ESTACION DE INGRESO YONAN</th>
            <th colspan="2">CANAL DE DESCARGA ESTACION N° 2</th>
            <th colspan="2">CANAL MINICENTRAL</th>
            <th colspan="2">CANAL GALLITO CIEGO</th>
            <th colspan="2">CANAL CASA TORTA</th>
            <th rowspan="3">CAUDAL TOTAL(m3/s)</th>
            <th rowspan="3">NIVEL DEL EMBALSE(m.s.n.m.)</th>

            <th rowspan="3">VOLUMEN TOTAL (Hm3)</th>

            <th colspan="2">N° 1</th>
            <th colspan="2">N° 2</th>
          </tr>
          <tr><!-- 4 -->
            <th>Mira(m)</th>
            <th>Caudal(m3/s)</th>
            <th>Mira(m)</th>
            <th>Caudal(m3/s)</th>
            <th>Mira(m)</th>
            <th>Caudal(m3/s)</th>
            <th>Mira(m)</th>
            <th>Caudal(m3/s)</th>
            <th>Mira(m)</th>
            <th>Caudal(m3/s)</th>
            <th>Mira(m)</th>
            <th>Caudal(m3/s)</th>
            <th>Caudal(m3/s)</th>
            <th>Mira(m)</th>
            <th>Caudal(m3/s)</th>
            <th>Mira(m)</th>

          </tr>
        </thead>



        <tbody>
          <?php
          include_once "models/dataGallito.php";

          foreach ($this->datos as $row) {
            $datag = new DataGallito();
            $datag = $row;

        ?>
          <tr>
            <td><?php echo $datag->hora; ?></td>
            <td><?php echo $datag->volumenCrecidas; ?></td>
            <td><?php echo $datag->nivelEmbalse; ?></td>
            <td><?php echo $datag->volumenTotal; ?></td>
            <td><?php echo $datag->volumenUtil; ?></td>
            <td><?php echo $datag->caudalTotal; ?></td>
            <td><?php echo $datag->ingresoMiraPaltas; ?></td>
            <td><?php echo $datag->ingresoCaudalPaltas; ?></td>
            <td><?php echo $datag->ingresoMiraYonan; ?></td>
            <td><?php echo $datag->ingresoCaudalYonan; ?></td>
            <td><?php echo $datag->salidaMiraE2; ?></td>
            <td><?php echo $datag->salidaCaudalE2; ?></td>
            <td><?php echo $datag->salidaMiraMinicentral; ?></td>
            <td><?php echo $datag->salidaCaudalMinicentral; ?></td>
            <td><?php echo $datag->salidaMiraCGC; ?></td>
            <td><?php echo $datag->salidaCaudalCGC; ?></td>
            <td><?php echo $datag->salidaMiraCTorta; ?></td>
            <td><?php echo $datag->salidaCaudalCTorta; ?></td>
            <td><?php echo $datag->nivelEmbalseCompensacion; ?></td>
            <td><?php echo $datag->volumenTotalEmbalse; ?></td>
            <td><?php echo $datag->aberturaComp1; ?></td>
            <td><?php echo $datag->caudalComp1; ?></td>
            <td><?php echo $datag->aberturaComp2; ?></td>
            <td><?php echo $datag->caudalComp2; ?></td>
            <td><?php echo $datag->laminacionGallito; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>



<?php require 'views/footer.php'; ?>