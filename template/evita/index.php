<?php include_once('header.php'); ?>

<?php
// <<<<<<< HEAD
 $conexion = mysqli_connect("localhost", "root", "", "evita");
 // session_start();
 $_SESSION["conexion"]=$conexion;
 
// define("conection", $conection);

	
	// Datos de la conexion
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "evita";
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección de base datos
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>

 <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-negative">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Librería Evita</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Conocenos</a></li>
              <li><a href="#">Contáctenos</a></li>
              <li><a href="productos.php">Productos</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Login<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <div class="jumbotron">
       <?php			  
		    $consulta = "SELECT * FROM producto";
		    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Error en la consulta a la DB");			  
	    ?>
	    <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOMBRE DEL PRODUCTO</th>
                <th>DESCUENTO</th>
                <th>STOCK</th>
                <th>PRECIO</th>
                </tr>
            </thead>
            <tbody>
              <?php
                while ($columna = mysqli_fetch_array( $resultado ))
		        {
					echo "<tr>";
					echo "<td>" . $columna['id_producto'] . "</td><td>" . $columna['nom_producto'] . "</td><td>" .$columna['des_producto'] . "</td><td>" .$columna['stock_producto'] ."</td><td>" .$columna['pre_venta'] ."</td>";
					echo "</tr>";
				}
              ?>
          </table>
        </div>
      </div>
    </div> <!-- /container -->
<?php include_once('footer.php'); ?>