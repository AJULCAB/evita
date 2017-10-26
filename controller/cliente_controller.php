<?php
include '../model/cliente_model.php'
$dni_cliente = $_REQUEST["dni"];
$nom_cliente = $_REQUEST["nombre"];
$app_cliente = $_REQUEST["apellido"];
$distrito    = $_REQUEST["distrito"];
$telefono    = $_REQUEST["telefono"];
$correo      = $_REQUEST["correo"];
$tipo        = $_REQUEST["tipo"];

agregarCliente($dni_cliente, $nom_cliente, $app_cliente, $distrito, $telefono, $correo, $tipo);
