<?php


// $con=$_SESSION["conexion"];

// Datos de la base de datos
    

function agregarProducto($nom_producto, $des_producto, $stock_producto, $pre_compra, $pre_venta, $id_categoria)
{
    include '../conection/conection.php';
    $insertar= "INSERT INTO producto(nom_producto, des_producto, stock_producto, pre_compra, pre_venta, id_categoria) VALUES('$nom_producto', '$des_producto', '$stock_producto', '$pre_compra', '$pre_venta', '$id_categoria')";
    $verificar_duplicado_de_producto = mysqli_query($conexion, "SELECT * FROM producto WHERE nom_producto = '$nom_producto'");
    if (mysqli_num_rows($verificar_duplicado_de_producto) > 0) {
        echo "El producto ya está registrado";  
    } else {
         $resultado = mysqli_query( $conexion, $insertar ) or die ( "Algo ha ido mal en la consulta a la base de datos");
         
    }
}
