<?php
	
	require '../conexion/conexion.php';
	
	$nombre = $_POST['nombre'];
	$stock = $_POST['stock'];
	$descripcion = $_POST['descripcion'];
	$imagen = $_POST['imagen'];
    $precio = $_POST['precio'];
	
	
	
	
	$sql = "INSERT INTO productos (nombre, descripcion, stock, imagen, precio) VALUES ('$nombre', '$descripcion', '$stock', '$imagen', '$precio')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/bootstrap-theme.css" rel="stylesheet">
		<script src="../public/js/jquery.min.js"></script>
		<script src="../public/js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="../admin/pag_principal_admin.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
