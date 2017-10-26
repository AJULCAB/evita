<?php

include '../conection/conection.php';

function agregarEmpleado($dni_cliente, $nom_cliente, $app_cliente, $distrito, $telefono, $correo, $tipo, $turno)
{
    $insertar= "INSERT INTO empleado VALUES('$dni_empleado', '$nom_empleado', '$app_empleado', '$distrito', '$telefono', '$correo', '$tipo')";
    $verificar_duplicado_de_dni = mysqli_query($conection, "SELECT * FROM empleado WHERE dni_empleado = '$dni_empleado'");
    if (mysqli_num_rows($verificar_duplicado_de_dni) > 0) {
        echo "El empleado ya está registrado";
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
