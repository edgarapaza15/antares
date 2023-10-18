<?php require 'views/header.php'; ?>

<div class="">
  <div class="grid-x">
    <h3>OPERACIÓN DIARIA VALVULAS HOWELL BUNGER Y ALIVIADERO DE CRECIDAS</h3>

    <table class="tabla2" border="1px">
      <thead>
        <tr><!-- 1 -->
          <th rowspan="3">HORA</th>
          <th rowspan="3">NIVEL DE EMBALSE (m.s.n.m)</th>
          <th colspan="5">VALVULAS HOWELL BUNGER</th>
          <th colspan="2">ALIVIADERO DE CRECIDAS</th>
        </tr>
        <tr><!-- 2 -->
          <th colspan="2">VAL. N° 1</th>
          <th colspan="2">VAL. N° 2</th>
          <th rowspan="2">CAUDAL TOTAL</th>
          <th rowspan="2">ALTURA DE MIRA (m)</th>
          <th rowspan="2">CAUDAL (m3/s)</th>
        </tr>
        <tr><!-- 3 -->
          <th>ABERTURA (m)</th>
          <th>CAUDAL (m3/s)</th>
          <th>ABERTURA (m)</th>
          <th>CAUDAL (m3/s)</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include_once "models/dataValvulas.php";

        foreach ($this->datos as $row) {
          $datag = new DataValvulas();
          $datag = $row;

      ?>
        <tr>
          <td><?php echo $datag->hora; ?></td>
          <td><?php echo $datag->nivelEmbalse; ?></td>
          <td><?php echo $datag->aberturaValvula; ?></td>
          <td><?php echo $datag->caudalValvula; ?></td>
          <td><?php echo $datag->caudalTotalValvula; ?></td>
          <td><?php echo $datag->aberturaValvula2; ?></td>
          <td><?php echo $datag->caudalValvula2; ?></td>
          <td><?php echo $datag->miraAliviadero; ?></td>
          <td><?php echo $datag->embalseAliviadero; ?></td>
          <!-- <td><?php echo $datag->fecCreate; ?></td>
          <td><?php echo $datag->idpersonal; ?></td> -->
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</div>

<?php require 'views/footer.php'; ?>