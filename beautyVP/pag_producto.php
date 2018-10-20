<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/compras.css">
	
</head>
<body>
	<header>
	     
		<h1>Carrito De Compras</h1>
		<a href="./carrito_compra.php" title="ver carrito de compras">
			<img src="img/c.png">
		</a>
	</header>
	<section>
		
	<?php
     include ("conexion_compra.php");
     $consulta="select * from productos";
     $query=mysqli_query($conexion, $consulta); 
     while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>

   <div class="producto">
   <center>
    <img src="./productos/<?php echo $f['imagen'];?>"><br>
    <span><?php echo $f['nombre'];?></span><br>
    <a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
    </center>
  </div>
 <?php
  }
 ?>
		
		

		
	</section>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</body>
</html>