<?php
	
	require '../conexion/conexion.php';

    $id = $_POST['id'];
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
	

	
	$sql = "UPDATE  usuarios SET usuario ='$usuario' , correo='$correo', nombre='$nombre', apellido='$apellido', direccion='$direccion', localidad='$localidad', numeroMovil='$numeroMovil' , tipo_usuario='$tipo_usuario' ,clave='$clave' , sexo='$sexo'  WHERE id = '$id'";
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
				
				<a href="./usuario.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>