<?php session_start();
    
	require '../conexion/conexion.php';
	


	$where = "";
	
	if(!empty($_POST))
	{
		$id = $_POST['id_usuario'];
		if(!empty($id)){
			$where = "WHERE id_usuario LIKE '$id%'";
		}
	}
	$sql = "SELECT * FROM facturas $where";
	$resultado = $mysqli->query($sql);
	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Incluir Bootstrap -->
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
				<h2 style="text-align:center">facturas</h2>
			</div>
			
			
			<br>
			<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>fecha</th>
							<th>id_producto</th>
							
							<th>cantidad</th>
							<th>id_usuario</th>
							
						
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['fecha']; ?></td>
								<td><?php echo $row['id_producto']; ?></td>
								<td><?php echo $row['cantidad']; ?></td>
								<td><?php echo $row['id_usuario']; ?></td>
								
								
								
								
								
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		
		
	</body>
</html>	