<?php //por seguridad no cierro la etiqueta php
	require_once "controladores/plantilla.controlador.php";//requiero una sola vez
	require_once "controladores/usuario.controlador.php";
	require_once "controladores/agenda.controlador.php";
	require_once "controladores/perfil.controlador.php";

	require_once "modelos/plantilla.modelo.php";
	require_once "modelos/usuario.modelo.php";
	require_once "modelos/agenda.modelo.php";
	require_once "modelos/perfil.modelo.php";


	$plantilla= new ControladorPlantilla();//creo el obje $plantilla e instancio la clase ControladorPlantilla que viene en el archivo requerido

	$plantilla -> ctrPlantilla();//ctrPlantilla es un metodo de controlador
 ?>