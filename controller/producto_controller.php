
<?php

include '../model/producto_model.php'
$nom_producto = $_REQUEST[""];
$des_producto = $_REQUEST[""];
$stock_producto = $_REQUEST[""];
$pre_compra     = $_REQUEST[""];
$pre_venta    = $_REQUEST[""];
$id_categoria     = $_REQUEST[""];

agregarProducto($nom_producto, $des_producto, $stock_producto, $pre_compra, $pre_venta, $id_categoria);

?>