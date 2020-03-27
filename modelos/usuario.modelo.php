<?php 
require_once "conexion.php";

/**
 * clase que realizza la sentencia sql=SELECT
 */
class ModeloUsuarios
{
	
	static public  function MdlMostrarUsuarios($tabla, $item, $valor)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");//:$item enlazamos un parametro requisito de PDO, con los : estamos diciendo que vamos a enlazar el parametro

		//enlazo con el metodo binPAram(enlazar parametro)
		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);//1er parametro columna, 2do lo comparo con, 3ro le digo que viene un string de caracteres, no lineas de codigo o inyeccion

		$stmt -> execute();//ejecutamos la preparacion de la sentencia sql en un objeto

		return $stmt -> fetch();
	}
}
 ?>