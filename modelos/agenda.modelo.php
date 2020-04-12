<?php
require_once('conexion.php');

/*
$sql = "SELECT id, title, start, end, color FROM events ";

$req = $link->prepare($sql);
$req->execute();

$events = $req->fetchAll();
*/
class ModeloAgenda
{
	
	static public  function MdlMostrarAgenda($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT id, title, start, end, color FROM $tabla");//:$item 

		$stmt -> execute();//ejecutamos la preparacion de la sentencia sql en un objeto

		return $events = $stmt->fetchAll();
	}
}
 ?>
