<?php 
require_once "conexion.php";

/**
 * clase que realizza la sentencia sql=SELECT
 */
class ModeloCategorias
{
	
	static public  function MdlMostrarCategorias($tabla, $item, $valor)
	{
		if ($item != null) {//pregunto si item viene distinto de nulo es porque le paso un valor para ser comparado con $valor
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");//:$item enlazamos un parametro requisito de PDO, con los : estamos diciendo que vamos a enlazar el parametro

			//enlazo con el metodo binPAram(enlazar parametro)
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);//1er parametro columna, 2do lo comparo con, 3ro le digo que viene un string de caracteres, no lineas de codigo o inyeccion

			$stmt -> execute();//ejecutamos la preparacion de la sentencia sql en un objeto

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");//selecciono todo de $tabla porque voy a mostrar todo

			
			$stmt -> execute();//ejecutamos la preparacion de la sentencia sql en un objeto

			return $stmt -> fetchAll();//devuelvo un fechAll porque serian todas las filas
		}
			

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlIngresarCategorias($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre) VALUES (:nombre)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;
	}

	/*=============================================
	Editar Categorias
	=============================================*/

	static public function mdlEditarCategorias($tabla, $datos){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}
	/*=============================================
	BORRAR Categorias
	=============================================*/

	static public function mdlBorrarCategorias($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}


}
 ?>