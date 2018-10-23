<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/bootstrap-theme.css" rel="stylesheet">
			
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">fecha</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha"  required>
					</div>
				</div>
				
				
				
				
				<div class="form-group">
					<label for="id_producto" class="col-sm-2 control-label">id_producto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_producto" name="id_producto" placeholder="id_producto"   required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="cantidad" class="col-sm-2 control-label">cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad"  >
					</div>
				</div>
				
				<div class="form-group">
					<label for="id_usuario" class="col-sm-2 control-label">id_usuario</label>
					<div class="col-sm-10">
						<input type="text" class="fid_usuario" id="id_usuario" name="id_usuario" placeholder="id_usuario"  >
					</div>
				</div>
				
				<div class="form-group">
					<label for="total" class="col-sm-2 control-label">total</label>
					<div class="col-sm-10">
						<input type="text" class="ftotal" id="total" name="total" placeholder="total"  >
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
		
		<script src="../public/js/jquery.min.js"></script>
		<script src="../public/js/bootstrap.min.js"></script>
		
	</body>
</html>