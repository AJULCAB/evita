<?php

include '../conection/conection.php';

function agregarCategoria($categoria)
{
    $insertar= "INSERT INTO categoria VALUES('$categoria')";
    $verificar_duplicado_de_cat = mysqli_query($conection, "SELECT * FROM categoria WHERE nom_categoria = '$categoria'");
    if (mysqli_num_rows($verificar_duplicado_de_cat) > 0) {
        echo "La categoria ya está registrada";
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
