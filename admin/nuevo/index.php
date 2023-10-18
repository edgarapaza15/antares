<?php require('admin/header.php'); ?>

<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12 large-12">

				<h4>Nuevo de personal</h4>
				<div id="mensaje"></div>
				<form action="<?php echo constant('URL');?>sysadmin/create" method="post">
				  <div class="grid-container">
				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label class="msg">Nombre(s)
				          <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
				        </label>
				      </div>
				    </div>
				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label>Apellidos
				          <input type="text" name="apellidos" id="apellidos" required placeholder="Apellidos">
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-4 cell">
				        <fieldset class="large-5 cell">
						    <legend>Sexo</legend>
						    <input type="radio" name="sexo" value="Masculino" id="masculino" required><label for="Masculino">Masculino</label>
						    <input type="radio" name="sexo" value="Femenino" id="femenino"><label for="Femenino">Femenino</label>
						</fieldset>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>Telefono
				          <input type="text" name="telefono" id="telefono" required placeholder="999">
				        </label>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>DNI
				          <input type="text" name="dni" id="dni" required placeholder="Numero DNI">
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-4 cell">
				        <label>Fecha de Nacimiento
				          <input type="date" name="fecha_nac" id="fecha_nac" required placeholder="Fecha Nacimiento">
				        </label>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>Foto
				          <input type="file" name="foto" id="foto">
				        </label>
				      </div>
				      <div class="small-12 medium-4 cell">
				        <label>Tipo de usuario
				          <select name="nivel" id="nivel">
						    <option value="" disabled="">Seleccione</option>
						    <option value="2">Personal de Planta</option>
						    <option value="1">Administrador</option>
						    <option value="3">Solo Visualiza reportes</option>
						  </select>
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label>Direccion
				          <input type="text" name="direccion" id="direccion" placeholder="Direccion">
				        </label>
				      </div>
				      <div class="small-12 medium-6 cell">
				        <label>Correo electronico (obligatorio)
				          <input type="email" name="email" id="email" placeholder="Email" required>
				        </label>
				      </div>
				    </div>

				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <label>Escriba una contraseña
				          <input type="password" name="passwd1" id="passwd1"  placeholder="***" required>
				        </label>
				      </div>
				      <div class="small-12 medium-6 cell">
				        <label>Repita la contraseña
				          <input type="password" name="passwd2" id="passwd2"  placeholder="***" required>
				        </label>
				      </div>
				    </div>
				    <div class="grid-x grid-padding-x">
				      <div class="small-12 medium-6 cell">
				        <button type="button" class="button large" name="btnValidar" id="btnValidar">Validar</button>
				        <button type="submit" class="button large success" name="btnGuardar" id="btnGuardar" style="display:none;">Guardar</button>
				      </div>
				      <div class="small-12 medium-6 cell">

				      </div>
				    </div>
				  </div>
				</form>


		</div>

	</div>
</div>


<?php require('admin/footer.php'); ?>
<script src="<?php echo constant('URL');?>public/js/nuevo.js"></script>