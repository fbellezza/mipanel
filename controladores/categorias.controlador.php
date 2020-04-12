<?php 

class ControladorCategorias
{

	/*=============================================
	REGISTRO DE Categorias
	=============================================*/

	static public function ctrCrearCategorias(){

		if(isset($_POST["nuevoNombre"])){

			if( preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"])){

			   
				$tabla = "categorias";

				$datos = array( "nombre" => $_POST["nuevoNombre"]
								);

				$respuesta = ModeloCategorias::mdlIngresarCategorias($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					Swal.fire({

						type: "success",
						title: "¡La Categoria ha sido guardada correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "categorias";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					Swal.fire({

						type: "error",
						title: "¡La Categoria no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "Categorias";

						}

					});
				

				</script>';

			}


		}


	}
	/*=============================================
				MOSTRAR  Categorias
	=============================================*/

	static public function ctrMostrarCategorias($item, $valor){
		$tabla="categorias";
		$respuesta = ModeloCategorias::MdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
				Editar  Categorias
	=============================================*/
	static public function ctrEditarCategorias(){
		if(isset($_POST["editarNombre"])){

			if( preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){
				
				
					$tabla = "categorias";

					
					$datos = array( "id" => $_POST["idCategoria"],
									"nombre" => $_POST["editarNombre"]);

				$respuesta = ModeloCategorias::mdlEditarCategorias($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

							Swal.fire({

								type: "success",
								title: "¡La Categoria ha sido Actualizada correctamente!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){

								if(result.value){
								
									window.location = "categorias";

								}

							});
						

							</script>';
			


				}else{

					echo '<script>

						Swal.fire({

							type: "error",
							title: "¡La Categoria no puede ir vacío o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"

						}).then(function(result){

							if(result.value){
							
								window.location = "categorias";

							}

						});
					

					</script>';

				}


			}else{
				echo '<script>

							Swal.fire({

								type: "error",
								title: "¡La Categoria no puede ir vacío o llevar caracteres especiales!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"

							}).then(function(result){

								if(result.value){
								
									window.location = "categorias";

								}

							});
						

				</script>';
			}

		}

	}
/*=============================================
	BORRAR Categorias
	=============================================*/

	static public function ctrBorrarCategorias(){

		if(isset($_GET["idCategorias"])){

			$tabla ="categorias";
			$datos = $_GET["idCategorias"];

			$respuesta = ModeloCategorias::mdlBorrarCategorias($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				Swal.fire({
					  type: "success",
					  title: "La Categoria ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "categorias";

								}
							})

				</script>';

			}		

		}

	}


}




 ?>