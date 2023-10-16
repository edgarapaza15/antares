<?php require 'views/header.php'; ?>

<div class="">
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
        include_once "models/dataGallito.php";

        foreach ($this->datos as $row) {
          $datag = new DataGallito();
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

</div>

<?php require 'views/footer.php'; ?>