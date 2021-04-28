<div >

	<form method="post">

		<div class="form-group">
			<label for="nombre">Nombre Producto:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="nombre" name="registroNombre">

			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Referencia:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-list-ul"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="referencia" name="referencia">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="precio">Precio:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-tags"></i>
					</span>
				</div>

				<input type="number" class="form-control" id="precio" name="precio">

			</div>

		</div>

		<div class="form-group">
			<label for="peso">Peso:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-weight"></i>
					</span>
				</div>

				<input type="number" class="form-control" id="peso" name="peso">

			</div>

		</div>

		<div class="form-group">
			<label for="categoria">Categoria:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-list-ul"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="categoria" name="categoria">

			</div>

		</div>

		<div class="form-group">
			<label for="stock">Stock:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-sort-numeric-up"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="stock" name="stock">

			</div>

		</div>

		<div class="form-group">
			<label for="fecha_ultima_venta">Fecha ultima venta:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-calendar-week"></i>
					</span>
				</div>

				<input type="date" class="form-control" id="fecha_ultima_venta" name="fecha_ultima_venta">

			</div>

		</div>

		<?php 

		$registro = ControllerForms::ControllerRegister();

		if($registro == "ok"){

			echo '<script>
			function alerta(){
			 swal({
			    title: "Buen trabajo!",
      text: "El producto ha sido registrado!",
      type: "success",
      confirmButtonColor: "#3085d6",
      confirmButtonText: "OK!"
			 });
			}
				 alerta();                   
			</script>';

		
		}

		?>
		
		<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>

	</form>

</div>