
<?php
<<<<<<< HEAD

include '../model/cliente_model.php'
=======
include '../model/cliente_model.php';
>>>>>>> 772b55943e41e982fe5e62bb0adc50a70c092bbd
$dni_cliente = $_REQUEST["dni"];
$nom_cliente = $_REQUEST["nombre"];
$app_cliente = $_REQUEST["apellido"];
$distrito    = $_REQUEST["distrito"];
$direccion    = $_REQUEST["direccion"];
$telefono    = $_REQUEST["telefono"];
$correo      = $_REQUEST["correo"];
$tipo        = $_REQUEST["tipo"];

<<<<<<< HEAD
agregarCliente($dni_cliente, $nom_cliente, $app_cliente, $distrito, $telefono, $correo, $tipo);

?>
=======
agregarCliente($dni_cliente, $nom_cliente, $app_cliente, $distrito,$direccion, $telefono, $correo, $tipo);
>>>>>>> 772b55943e41e982fe5e62bb0adc50a70c092bbd
