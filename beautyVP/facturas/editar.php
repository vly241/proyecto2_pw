<?php
	require '../conexion/conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM facturas WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO factura</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">fecha</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="id_producto" class="col-sm-2 control-label">id_producto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_producto" name="id_producto" placeholder="id_producto" value="<?php echo $row['id_producto']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="cantidad" class="col-sm-2 control-label">cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" value="<?php echo $row['cantidad']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="id_usuario" class="col-sm-2 control-label">id_usuario</label>
					<div class="col-sm-10">
						<input type="text" class="fid_usuario" id="id_usuario" name="id_usuario" placeholder="id_usuario" value="<?php echo $row['id_usuario']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="total" class="col-sm-2 control-label">total</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="total" name="total" placeholder="total" value="<?php echo $row['total']; ?>" >
					</div>
				</div>
				
				
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="./facturas.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>