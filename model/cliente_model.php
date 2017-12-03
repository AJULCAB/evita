<?php
include_once '../conection/conection.php';
function agregarCliente($dni_cliente, $nom_cliente, $app_cliente, $distrito, $direccion, $telefono, $correo, $tipo)
{
    $insertar = "INSERT INTO cliente(dni_cliente, nom_cliente, app_cliente, distrito,direccion, telefono, correo, tipo_cli) VALUES('$dni_cliente', '$nom_cliente', '$app_cliente', '$distrito','$direccion', '$telefono', '$correo', '$tipo')";
    $verificar_duplicado_de_dni = mysqli_query($_SESSION["conexion"], "SELECT * FROM cliente WHERE dni_cliente = '$dni_cliente'");

    if (mysqli_num_rows($verificar_duplicado_de_dni) > 0) {
        echo "El cliente ya está registrado";
    } else {
        $resultado = mysqli_query($_SESSION["conexion"], $insertar);

        if (!$resultado) {
            echo "Error al registrar";
        } else {
            echo "<h1>Datos de '$nom_cliente' Registrados correctamente</h1>";
        }
    }
    // msqli_close($conexion);
}
