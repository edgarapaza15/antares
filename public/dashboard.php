<?php include "header.php"; ?>

<!-- Card superior -->
<br>
<div class="row small-up-12 medium-up-3">
  <div class="column">
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
  <div class="small-12 medium-6 large-3 column">
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
  <div class="small-12 medium-6 large-3 column">
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


<!-- grafico 1 -->
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
          <i class="fa fa-history"></i> Updated 3 minutes ago
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>