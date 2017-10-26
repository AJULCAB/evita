<?php
 $conexion = mysqli_connect("localhost", "root", "", "evita");
 session_start();
 $_SESSION["conexion"]=$conexion;
// define("conection", $conection);

// if (!$conexion) {
//     echo "Error de conexión con la base de datos";
// } else {
//     echo "Conexión exitosa";
// }

