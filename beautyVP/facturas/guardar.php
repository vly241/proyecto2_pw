<?php
	
	require '../conexion/conexion.php';
	
	$fecha = $_POST['fecha'];
	$id_producto = $_POST['id_producto'];
	$cantidad = $_POST['cantidad'];
	$id_usuario = $_POST['id_usuario'];
    $total = $_POST['total'];
    
	
	
	
	
	$sql = "INSERT INTO facturas (fecha, id_producto, cantidad, id_usuario, total) VALUES ('$fecha', '$id_producto', '$cantidad', '$id_usuario', '$total')";
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