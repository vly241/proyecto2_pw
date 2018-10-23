<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
     <link rel="stylesheet" href="../public/css/bootstrap.min.css">
   
	
</head>
<body>
	
	<section>
		
	
<?php
     include ("../conexion/conexion_compra.php");
      $re=("select * from usuarios where id=".$_GET['id'])or 
                 die(mysql_error());
      $query=mysqli_query($conexion,$re); 
      while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
   
        ?>
  
      
   <center>
    <h1></h1><br>
   
  
    
  <div class="card" style="width:500px">
  <img class="card-img-top" src="../public/img/<?php echo $row['sexo'];?>" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title"><?php echo $row['nombre'];?></h4>
       <h4 class="card-title"><?php echo $row['apellido'];?></h4>
    <h2 class="card-title">correo:</h2>
    <p class="card-text"><?php echo $row['correo'];?></p>
    <h2 class="card-title">direccion:</h2>
    <p class="card-title"><?php echo $row['direccion'];?></p>
    <h2 class="card-title">localidad:</h2>
    <p class="card-title"><?php echo $row['localidad'];?></p>
    <h2 class="card-title">telefono:</h2>
    <p class="card-title"><?php echo $row['numeroMovil'];?></p>
    <h2 class="card-title">clave:</h2>
    <p class="card-title"><?php echo $row['clave'];?></p>
   
  </div>
</div>
     <a href="./usuario.php" class="btn btn-success">Ir Atrás</a>
    </center>
  
    
 <?php } ?>
   
 
 
		
		

		
	</section>
	<script type="text/javascript"  href="../js/scripts.js"></script>
</body>
</html>