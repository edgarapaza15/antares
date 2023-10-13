<?php require 'views/header.php'; ?>

<script src="<?php echo constant('URL') ?>public/js/reloj.js"></script>

<div class="grid-container">

  <div class="grid-x">
    <div class="cell medium-1">
      <div class="">
        <img src="<?php echo constant('URL') . $_SESSION['foto']; ?>" alt="Foto" class="redondeado">
      </div>
    </div>
    <div class="cell medium-6">
      <h2>Hola, <?php echo $_SESSION['nombre']; ?></h2>
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
      <div class="card">
        <div class="card-section">
          <h5>Users Behavior</h5>
          <p>24 Hours performance</p>
        </div>
        <div class="card-section ">
          <canvas id=chartHours width="400" height="100"></canvas>
        </div>
        <div class="card-divider">
          <hr>
          <div class="stats">
            <i class="fa fa-history"></i> Actualizado hace 3 minutos
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



<?php include "views/footer.php"; ?>
