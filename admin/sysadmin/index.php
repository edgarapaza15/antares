<?php require('admin/header.php'); ?>

<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12 large-12">
			<div class="card">
				<h4>Listado de personal</h4>
				<?php
				if(empty($this->mensaje)){

				}else{
					echo "<div class='callout success' data-closable>
				  <i class='fa fa-warning' aria-hidden='true'></i>
				  <p>". $this->mensaje ."</p>
				  <button class='close-button' aria-label='Dismiss alert' type='button' data-close>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
				}
				?>




				<a href="<?php echo constant('URL');?>sysadmin/nuevo">Nuevo Personal</a>
				<table>
					<thead>
						<tr>
							<th>Num</th>
							<th>Nombre</th>
							<th>DNI</th>
							<th>Telefono</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include_once "models/personal.php";

        				foreach ($this->datos as $row) {
          				$personal = new Personal();
          				$personal = $row;
						?>
						<tr>
							<td>1</td>
							<td><?php echo $personal->nombre." ".$personal->apellidos;?></td>
							<td><?php echo $personal->dni;?></td>
							<td><?php echo $personal->telefono;?></td>
							<td>
								<a href="#">Editar</a>
								<span>|</span>
								<a href="#">Borrar</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>

	</div>
</div>


<?php require('admin/footer.php'); ?>