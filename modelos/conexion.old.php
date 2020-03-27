<?php 

	/**
	 * clase Conexion entabla coneccion con la db
	 */
	class Conexion
	{
		
		public function conectar()
		{
			$link = new PDO("mysql:host=127.0.0.1; dbname=federicobellezza",
							"root",
							"");

			$link -> exec("set names utf8");

			return $link;
		}
	}
 ?>