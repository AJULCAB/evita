<?php

include '../conection/conection.php';

function agregarCliente($dni_cliente, $nom_cliente, $app_cliente, $distrito, $telefono, $correo, $tipo)
{
    $insertar= "INSERT INTO cliente VALUES('$dni_cliente', '$nom_cliente', '$app_cliente', '$distrito', '$telefono', '$correo', '$tipo')";
    $verificar_duplicado_de_dni = mysqli_query($conection, "SELECT * FROM cliente WHERE dni_cliente = '$dni_cliente'");
    if (mysqli_num_rows($verificar_duplicado_de_dni) > 0) {
        echo "El cliente ya está registrado";
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
