
<?php

include '../model/producto_model.php';
$nom_producto = $_REQUEST["producto"];
$des_producto = $_REQUEST["descripcion"];
$stock_producto = $_REQUEST["stock"];
$pre_compra     = $_REQUEST["p_compra"];
$pre_venta    = $_REQUEST["p_venta"];
$id_categoria     = $_REQUEST["idcategoria"];

agregarProducto($nom_producto, $des_producto, $stock_producto, $pre_compra, $pre_venta, $id_categoria);

?>