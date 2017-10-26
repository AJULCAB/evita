<?php

include '../conection/conection.php';

function agregarProducto($nom_producto, $des_producto, $stock_producto, $pre_compra, $pre_venta, $id_categoria)
{
    $insertar= "INSERT INTO producto VALUES('$nom_producto', '$des_producto', '$stock_producto', '$pre_compra', '$pre_venta', '$id_categoria')";
    $verificar_duplicado_de_dni = mysqli_query($conection, "SELECT * FROM producto WHERE nom_producto = '$nom_producto'");
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
    msqli_close($conexion);
}
