<?php require 'views/header.php'; ?>

<div class="grid-container">
  <div class="grid-x">
    <h3>Reporte de Datos Hidrometeorológicos</h3>
  </div>

  <div class="grid-x">
    <div class="row large-12">
      <ul class="accordion" data-accordion>
        <li class="accordion-item" data-accordion-item>
          <!-- Accordion tab title -->
          <a href="#" class="accordion-title titulo">Presa Gallito Ciego</a>

          <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
          <div class="accordion-content" data-tab-content>
            <div class="row">
              <div class="small-12 medium-6 columns">
                <form>
                  <div class="grid-container">
                    <h3>Presa Gallito Ciego</h3>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Nivel de Embalse:
                          <input type="text" name="nivelEmbalse">
                        </label>
                        <label>Volumen Total:
                          <input type="text" name="volumenTotal">
                        </label>
                        <label>Caudal Autorizado por el ALA:
                          <input type="text" name="nivelEmbalse">
                        </label>
                        <label>Volumen Util:
                          <input type="text" name="Hora">
                        </label>
                        <label>Volumen de Crecidas:
                          <input type="text" name="nivelEmbalse">
                        </label>
                        <h4>POZA DE COMPENSACION CH GC</h4>
                        <label>Cota:
                          <input type="text" name="Hora">
                        </label>

                      </div>
                      <div class="medium-6 cell">
                        <label>Volumen:
                          <input type="text">
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <!-- Accordion tab title -->
          <a href="#" class="accordion-title titulo">Ingresos</a>

          <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
          <div class="accordion-content" data-tab-content>

            <div class="row">
              <div class="small-12 medium-6 columns">
                <form>
                  <div class="grid-container">
                    <h3>Estacion Yonan</h3>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>
                    <h3>Estacion las Paltas</h3>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">

                        <label>Hora:
                          <input type="text" name="hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">

                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

        </li>

        <li class="accordion-item" data-accordion-item>
          <!-- Accordion tab title -->
          <a href="#" class="accordion-title titulo">Descargas</a>

          <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
          <div class="accordion-content" data-tab-content>
            <div class="row">
              <div class="small-12 medium-6 columns">
                <form>
                  <div class="grid-container">
                    <h5>Descargas aliviaderos</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>
                    <!-- Valvulas n° 1 -->
                    <h5>Valvulas H.B. N° 1</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <!-- Valvulas N°2 -->
                    <h5>Valvulas H.B. N° 2</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="abertura">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <!-- Canal Descarga (C.D.) -->
                    <h3>Canal Descarga (C.D.)</h3>
                    <h5>Estacion N° 1 (E-1 C.D.)</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>


                    <h5>Estacion N° 2 (E-2 C.D.)</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>


                    <!-- C.H. GALLITO CIEGO -->
                    <h3>C.H. GALLITO CIEGO</h3>
                    <h5>Compuerta N° 1</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <h5>Compuerta N° 2</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <h5>By Pass</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="mira">
                        </label>
                      </div>

                    </div>

                    <h5>Canal Casa de Torta</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <h5>Canal Mini Central</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <h5>Dren Pie de Presa</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <h5>Canal Gallito Ciego</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <h5>Salida Total de Presa</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>

          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <!-- Accordion tab title -->
          <a href="#" class="accordion-title titulo">Bocatoma Talambo Zaña</a>

          <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
          <div class="accordion-content" data-tab-content>
            <div class="row">
              <div class="small-12 medium-6 columns">
                <form>
                  <div class="grid-container">
                    <!-- Canal Talambo Zaña -->
                    <h5>Canal Talambo Zaña</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>
                    <!-- Canal Empalme Guadalupe  -->
                    <h5>Canal Empalme Guadalupe</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                    <!-- Rio Jequetepeque Aguas Abajo Botaza -->
                    <h5>Rio Jequetepeque Aguas Abajo Botaza</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="abertura">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>

          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <!-- Accordion tab title -->
          <a href="#" class="accordion-title titulo">Bocatoma Jequetepeque</a>

          <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
          <div class="accordion-content" data-tab-content>
            <div class="row">
              <div class="small-12 medium-6 columns">
                <form>
                  <div class="grid-container">
                    <!-- Bocatoma Jequetepeque -->
                    <h5>Bocatoma Jequetepeque</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Mira:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Embalse:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>
                    <!-- Canal Revestido  -->
                    <h5>Canal Revestido</h5>
                    <div class="grid-x grid-padding-x">
                      <div class="medium-6 cell">
                        <label>Hora:
                          <input type="text" name="Hora">
                        </label>
                        <label>Abertura:
                          <input type="text" name="mira">
                        </label>
                      </div>
                      <div class="medium-6 cell">
                        <label>Caudal:
                          <input type="text" name="caudal">
                        </label>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>

          </div>
        </li>

        <!-- ... -->
      </ul>
    </div>
  </div>
</div>

<?php require 'views/footer.php'; ?>