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
				<h3 style="text-align:center">NUEVO REGISTRO USUARIOS</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="usuario" class="col-sm-2 control-label">usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="correo" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="correo" name="correo" placeholder="Email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="apellido" class="col-sm-2 control-label">apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">direccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="localidad" class="col-sm-2 control-label">localidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="localidad" name="localidad" placeholder="localidad" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="numeroMovil" name="numeroMovil" placeholder="Telefono">
					</div>
				</div>
				
				<div class="form-group">
					<label for="tipo usuario" class="col-sm-2 control-label">tipo usuario</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo_usuario" name="tipo_usuario">
							<option value="admin">administrador</option>
							<option value="usuario">usuario</option>
							
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="sexo" class="col-sm-2 control-label">sexo</label>
					<div class="col-sm-10">
						<select class="form-control" id="sexo" name="sexo">
							<option value="img_avatar2.png">femenino</option>
							<option value="MaleAvatar-1.png">masculino</option>
							
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="clave" class="col-sm-2 control-label">clave</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="clave" name="clave" placeholder="clave" required>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="./usuario.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>