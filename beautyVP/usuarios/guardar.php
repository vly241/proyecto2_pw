<?php
	
	require '../conexion/conexion.php';
	
	$usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $numeroMovil = $_POST['numeroMovil'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $sexo = $_POST['sexo'];
	$clave = $_POST['clave'];
   

        $clave = hash('sha512', $clave);
        
	
	$sql = "INSERT INTO usuarios (usuario, correo, nombre, apellido, direccion, localidad, numeroMovil , tipo_usuario ,clave , sexo ) VALUES ('$usuario', '$correo', '$nombre', '$apellido', '$direccion', '$localidad' , '$numeroMovil' , '$tipo_usuario' , '$clave', '$sexo')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="../public/css/bootstrap.min.css" />
		<link href="../public/css/bootstrap-theme.css" rel="stylesheet">
	
     
      <!-- Incluir Jquery -->
     <script src="../public/js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
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
					
					<a href="./usuario.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
