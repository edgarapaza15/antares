<?php require 'views/header.php'; ?>

<div class="">
  <div class="grid-x">
    <h3>Reporte</h3>

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