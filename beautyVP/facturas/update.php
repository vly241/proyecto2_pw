<?php
	
	require '../conexion/conexion.php';

	$id = $_POST['id'];
	$id_producto = $_POST['id_producto'];
	$cantidad = $_POST['cantidad'];
	$id_usuario = $_POST['id_usuario'];
	$total = $_POST['total'];
    $fecha = $_POST['fecha'];
	
	

	
	$sql = "UPDATE facturas SET fecha='$fecha', id_producto='$id_producto', cantidad='$cantidad', id_usuario='$id_usuario', total='$total' WHERE id = '$id'";
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
				
				<a href="./facturas.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
