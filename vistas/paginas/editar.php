<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];

	$producto = ControllerForms::ControllerSelectRegisters($item, $valor);

}

?>


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

				<input type="text" class="form-control" value="<?php echo $producto["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
				<input type="hidden" name="idProducto" value="<?php echo $producto["id"]; ?>">
			</div>
			
		</div>

		<div class="form-group">
			<label for="nombre">Referencia:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-list-ul"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $producto["referencia"]; ?>" placeholder="Escriba su referencia" id="referencia" name="actualizarReferencia">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="nombre">Precio:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-tags"></i>
					</span>
				</div>

				<input type="number" class="form-control" value="<?php echo $producto["precio"]; ?>" placeholder="Escriba el precio" id="precio" name="actualizarPrecio">


			</div>

		</div>

		<div class="form-group">
			<label for="nombre">Peso:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-weight"></i>
					</span>
				</div>

				<input type="number" class="form-control" value="<?php echo $producto["peso"]; ?>" placeholder="Escriba el peso" id="peso" name="actualizarPeso">


			</div>

		</div>

		<div class="form-group">
			<label for="nombre">Categoria:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-list-ul"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $producto["categoria"]; ?>" placeholder="Escriba la categoria" id="categoria" name="actualizarCategoria">


			</div>

		</div>

		<div class="form-group">
			<label for="nombre">Stock:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
					<i class="fas fa-sort-numeric-up"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $producto["stock"]; ?>" placeholder="Escriba el stock" id="stock" name="actualizarStock">


			</div>

		</div>		



		<?php

		$actualizar = ControllerForms::ControllerUpdateRegister();

		if($actualizar == "ok"){

			echo '<script>
			function alerta(){
			 swal({
			    title: "Buen trabajo!",
      text: "El producto ha sido actualizado!",
      type: "success",
      confirmButtonColor: "#3085d6",
      confirmButtonText: "OK!"
			 });
			}
				 alerta();                   
			</script>';

			echo '<script>

				setTimeout(function(){
				
					window.location = "index.php?pagina=leer";

				},2000);

			</script>

			';

		}

		?>
		
		<button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar</button>

	</form>

</div>