<?php

include '../conection/conection.php';

function listarCategoria(){
    $sentence="Select idavance,cantidad_avanzada,observaciones,estado,fecharegistro";
    $resultado
}

function agregarCategoria($categoria)
{
    $insertar= "INSERT INTO categoria VALUES('$categoria')";
    $verificar_duplicado_de_cat = mysqli_query($conection, "SELECT * FROM categoria WHERE nom_categoria = '$categoria'");
    if (mysqli_num_rows($verificar_duplicado_de_cat) > 0) {
        return "La categoria ya está registrada";
    } else {
        $resultado = mysqli_query($conection, $insertar);
        if (!$resultado) {
            return "Error al registrar";
        } else {
            return "
                <div class=\"alert alert-success\">
                  <strong>Success!</strong>$nombre save!. Indicates a successful or positive action.
                </div>

            "   ;
        }
    }
    msqli_close($conexion);
}
function 
