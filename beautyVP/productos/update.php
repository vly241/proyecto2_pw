<?php
	
	require '../conexion/conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$stock = $_POST['stock'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
	
	

	
	$sql = "UPDATE productos SET nombre='$nombre', stock='$stock', descripcion='$descripcion', precio='$precio', imagen='$imagen' WHERE id = '$id'";
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
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="../admin/pag_principal_admin.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
