<?php
	/*
	Plugin Name: Esqueleto
	Plugin URI: []
	Description: Esqueleto de un formumulario de pasarela de pago
	Version: 1.0
	Author: Ervin
	Author URI: []
	License: []
	*/

	//Evita que un usuario malintencionado ejecute codigo php desde la barra del navegador
	defined('ABSPATH') or die( "Bye bye" );

	//Aqui se definen las constantes
	define('RAI_RUTA',plugin_dir_path(__FILE__));
	define('RAI_NOMBRE','Esqueleto');

	//Archivos externos
	include(RAI_RUTA.'/includes/opciones.php');
?>
