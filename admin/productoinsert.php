
<?php include 'header.php';?>
<?php include '../conection/conection.php';?>

<!-- A PARTIR DE AQUI CONTENIDO DE LA WEB -->
   
<section class="content-header">
  <h1>
    PRODUCTOS
      <small>AGREGANDO PRODUCTOS</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> INICIO</a></li>
    <li><a href="#">PRODUCTOS</a></li>
    <li class="active">DATOS</li>
  </ol>
</section>

<!-- CONTENIDO PRINCIPAL-->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">PRODUCTO NUEVO</h3>
        </div>

      <?php			  
		    $consulta = "SELECT * FROM producto";
		    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Error en la consulta a la DB");   		  
	    ?>
			 

<form action="../controller/producto_controller.php" method="post">
<div class="row">
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="producto">Producto</label>
      <input type="text" name="producto" required value="" class="form-control" placeholder="Nombre producto...">
    </div>
  </div>
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="descripcion">Descripción</label>
      <input type="text" name="descripcion" required value="" class="form-control" placeholder="Descripción producto...">  
    </div>
  </div>
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="stock">Stock</label>
      <input type="text" name="stock" required value="" class="form-control" placeholder="Stock articulo...">
    </div>
  </div>
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="p_compra">Precio Compra</label>
      <input type="text" name="p_compra" value="" class="form-control" placeholder="Precio compra...">
    </div>
  </div>
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="p_venta">Precio Venta</label>
      <input type="text" name="p_venta" value="" class="form-control" placeholder="Precio venta...">
    </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="categoria">Categoria</label>
      <select name="idcategoria" class="form-control">
          <?php       
            $consulta = "SELECT * FROM categoria";
            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Error en la consulta a la DB");         
          ?>
          <?php
                 while ($columna = mysqli_fetch_array( $resultado ))
                {
                  echo "<option value='". $columna['id_categoria']."'>";
                  echo  $columna['nom_categoria'];
                  echo "</option>";
                }
              ?>

          
      </select>
    </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <button class="btn btn-primary" type="submit">Guardar</button>
      <button class="btn btn-danger" type="reset">Cancelar</button>
    </div>
  </div>

</div>

</form>





      </div>
    </div>
  </div>
</section>
 

  <!-- FIN DEL CONTENIDO DE LA WEB -->

<?php include 'footer.php';?>