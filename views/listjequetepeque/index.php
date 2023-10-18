<?php require 'views/header.php'; ?>

<div class="">
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

</div>

<?php require 'views/footer.php'; ?>