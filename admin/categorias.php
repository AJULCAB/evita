
<?php include 'header.php';?>
<?php include '../conection/conection.php';?>

<!-- A PARTIR DE AQUI CONTENIDO DE LA WEB -->
   
<section class="content-header">
  <h1>
    CATEGORIAS
      <small>DATA DE CATEGORIAS</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> INICIO</a></li>
    <li><a href="#">CATEGORIAS</a></li>
    <li class="active">DATOS</li>
  </ol>
</section>

<!-- CONTENIDO PRINCIPAL-->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">DATOS DE CATEGORIAS</h3>
        </div>
        <div class="text-right">
          <a class="btn btn-success" href="#">Nuevo</a>
        </div>

      <?php			  
		    $consulta = "SELECT * FROM categoria";
		    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Error en la consulta a la DB");   		  
	    ?>
			 
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>CATEGORIA</th>
              </tr>
            </thead>

            <tbody>
              <?php
                 while ($columna = mysqli_fetch_array( $resultado ))
		            {
						      echo "<tr>";
						      echo "<td>" . $columna['id_categoria'] . "</td><td>" . $columna['nom_categoria'] . "</td>";
						      echo "</tr>";
					      }
              ?>
                
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
  

  <!-- FIN DEL CONTENIDO DE LA WEB -->

<?php include 'footer.php';?>