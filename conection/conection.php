<?php
<<<<<<< HEAD
	
	// Datos de la conexion
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "evita";
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección de base datos
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>
=======
 $conexion = mysqli_connect("localhost", "root", "", "evita");
 session_start();
 $_SESSION["conexion"]=$conexion;
// define("conection", $conection);

// if (!$conexion) {
//     echo "Error de conexión con la base de datos";
// } else {
//     echo "Conexión exitosa";
// }

>>>>>>> 772b55943e41e982fe5e62bb0adc50a70c092bbd
