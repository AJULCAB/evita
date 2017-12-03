<?php
	 $conexion = mysqli_connect("localhost", "root", "", "evita");
	 // session_start();
	$_SESSION["conexion"]=$conexion;
	// Datos de la conexion
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "evita";
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	// Selección de base datos
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>

 
