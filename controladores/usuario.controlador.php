<?php 
/**
 * 
 */
class ControladorUsuarios
{
	
	static public function ctrIngresoUsuario()
	{
		if (isset($_POST["email"])) {//si viene por post email hago preg match para corroborar que no venga inyeccion sql
			if (preg_match('/^[a-zA-Z0-9@.-_]+$/', $_POST["email"])&&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["pass"])
				) {
				$tabla="usuario";//llamo a la tabla 

				$item="mail";//esta variable consulta en en $tabla la columna $item
				$valor=$_POST["email"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor); //almaceno en respuesta el resultado del metodo

				if($respuesta["mail"] == $_POST["email"] && $respuesta["password"] == $_POST["pass"]){

				$_SESSION["iniciarSesion"]="ok";

				echo '<script>
						windows.location = "inicio";
					  </script>';
				}else{
					echo '<div class"alert-dange">Usuario Incorrecto, vueve a intentarlo</div>';
				}

				}
		}
	}
}

 ?>