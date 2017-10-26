<?php

// include '../conection/conection.php';
// Datos de la conexion
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "evita";
    
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección de base datos
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

function agregarProducto($nom_producto, $des_producto, $stock_producto, $pre_compra, $pre_venta, $id_categoria)
{
    $insertar= "INSERT INTO producto VALUES('$nom_producto', '$des_producto', '$stock_producto', '$pre_compra', '$pre_venta', '$id_categoria')";
    var_dump($insertar);

    $verificar_duplicado_de_producto = mysqli_query($conection, "SELECT * FROM producto WHERE nom_producto = '$nom_producto'");
    if (mysqli_num_rows($verificar_duplicado_de_producto) > 0) {
        echo "El producto ya está registrado";  
    } else {
        $resultado = mysqli_query($conection, $insertar);
        if (!$resultado) {
            echo "Error al registrar";
        } else {
            echo "<h1>Datos de '$nombre' Registrados correctamente</h1>";
        }
    }
    // msqli_close($conexion);
}
