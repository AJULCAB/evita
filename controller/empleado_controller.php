
<?php

include '../model/empleado_model.php'
$dni_empleado = $_REQUEST[""];
$nom_empleado = $_REQUEST[""];
$app_empleado = $_REQUEST[""];
$distrito     = $_REQUEST[""];
$direccion    = $_REQUEST[""];
$telefono     = $_REQUEST[""];
$correo       = $_REQUEST[""];
$tipo         = $_REQUEST[""];
$turno        = $_REQUEST[""];

agregarEmpleado($dni_empleado, $nom_empleado, $app_empleado, $distrito, $telefono, $correo, $tipo, $turno);

?>