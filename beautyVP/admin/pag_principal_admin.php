<?php
	require '../conexion/conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM productos $where";
	$resultado = $mysqli->query($sql);
	
?>




<!DOCTYPE html>
<html lang="es">
<head>
   		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin:beautyVP</title>
    
    <!-- Incluir Bootstrap -->
	<link rel="stylesheet" href="../public/css/bootstrap.min.css" />
		<link href="../public/css/bootstrap-theme.css" rel="stylesheet">
	 <link rel="stylesheet" href="../public/css/pag_principal.css">
     <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
   
   <header class="header">
      <div class="contenedor">
        
        <img src="public/img/beauty.png" class="logo" alt="">
        
        <span class="icon-menu" id="btn-menu"></span>
        
        <nav class="nav" id="nav">
         
          <ul class="menu">
            <li class="menu__item"><a href="/" class="menu__link select">Inicio</a></li>
            <li class="menu__item"><a href="" class="menu__link">Usuarios</a></li>
            <li class="menu__item"><a href="" class="menu__link">vista usuario</a></li>
            <li class="menu__item"><a href="" class="menu__link">Facturas</a></li>
            <li class="menu__item"><a href="../carrito_compra.php" class="menu__link"><img src="../public/img/carrito.png" alt=""></a></li>
        
            
          
           
              
                <img src="img/sesion.png"  alt="">
                
                <a href="../cerrar_sesion.php" class="sesion">Cerrar sesion</a>
            
                        
          </ul>
        </nav>
      </div>
    </header>
   
     <div class="banner">
     <img src="../public/img/banner.jpg" alt="">
     
    </div>
    
    <div class="container">
   <center>
       <div class="row">
       <h1>productos</h1>
				<a href="../productos/crear.php" class="btn btn-primary">Nuevo Registro</a>
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
   </center>
   
		<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>stock</th>
							<th>opciones</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['stock']; ?></td>
								<td><a class="btn btn-success" href="../productos/detalle_prod.php?id=<?php  echo $row['id'];?>">detalle</a></td>
								<td><a href="../productos/editar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="../productos/eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			</div>
			
			
			<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
			
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a  class="btn btn-danger btn-ok">Delete</a>
					</div>
					
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
			
   
    <!-- Incluir Jquery -->
	<script src="../public/js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
	<script src="../public/js/bootstrap.min.js"></script>
</body>
</html>