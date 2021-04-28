<?php

class ControllerForms{

	static public function ControllerRegister(){

		if(isset($_POST["registroNombre"])){

			$tabla = "producto";

			$datos = array("nombre" => $_POST["registroNombre"],
				           "referencia" => $_POST["referencia"],
				           "precio" => $_POST["precio"],
				           "peso" => $_POST["peso"],
				           "categoria" => $_POST["categoria"],
				           "stock" => $_POST["stock"],
				           "fecha_ultima_venta" => $_POST["fecha_ultima_venta"]
				       );

			$respuesta = ModelForms::mdlRegister($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ControllerSelectRegisters($item, $valor){

		$tabla = "producto";

		$respuesta = ModelForms::mdlSelectRegisters($tabla, $item, $valor);

		return $respuesta;

	}



	static public function ControllerUpdateRegister(){

		if(isset($_POST["actualizarNombre"])){


			$tabla = "producto";

			$datos = array("id" => $_POST["idProducto"],
							"nombre" => $_POST["actualizarNombre"],
				           "referencia" => $_POST["actualizarReferencia"],
				           "precio" => $_POST["actualizarPrecio"],
				           "peso" => $_POST["actualizarPeso"],
				           "categoria" => $_POST["actualizarCategoria"],
				           "stock" => $_POST["actualizarStock"]);

			$respuesta = ModelForms::mdlUpdateRegister($tabla, $datos);

			return $respuesta;

		}


	}


	public function ControllerDeleteRegister(){

		if(isset($_POST["eliminarProducto"])){

			$tabla = "producto";
			$valor = $_POST["eliminarProducto"];

			$respuesta = ModelForms::mdlDeleteRegister($tabla, $valor);

			if($respuesta == "ok"){

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=leer";

				</script>';

			}

		}

	}



	public function ControllerShopProduct(){

		if(isset($_POST["venderProducto"])){

			$tabla = "producto";
			$valor = $_POST["venderProducto"];

			$respuesta = ModelForms::mdlShopProduct($tabla, $valor);

			if($respuesta == "ok"){

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=leer";

				</script>';

			}

		}

	}


}