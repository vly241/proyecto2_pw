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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="stock" class="col-sm-2 control-label">stock</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="stock" name="stock" placeholder="ingrese el stock del producto en el inventario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="precio" class="col-sm-2 control-label">precio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="ingrese el precio por unidad del producto">
					</div>
				</div>
				
				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="ingrese la descipcion del productos">
					</div>
				</div>
				
				<div class="form-group">
					<label for="imagen" class="col-sm-2 control-label">imagen</label>
					<div class="col-sm-10">
						<input type="FILE" class="form-control" id="imagen" name="imagen" placeholder="ingrese el documento de la imagen del producto">
					</div>
				</div>
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../admin/pag_principal_admin.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
		
		
		
	</body>
</html>