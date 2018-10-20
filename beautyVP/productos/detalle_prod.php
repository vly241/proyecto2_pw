
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
     <link rel="stylesheet" href="../public/css/bootstrap.min.css">
   
	<style>
    section{
	width: 80%;
	min-height: 500px;
	border: 1px solid #DDD;
	padding: 2%;
	margin:0 auto;
	margin-left: 10%;
	margin-top: 50px;
}
.producto{
	width: 23%;
	height: 220px;
	background-color: #fafafa;
	border:1px solid gray;
	display: inline-block;
	vertical-align: top;
	margin-left: 1%;
	margin-top: 1%;
}
img{
	width: 30%;
	height: 30%;
	margin:0 auto;
}


    </style>
</head>
<body>
	
	<section>
		
	
<?php
     include ("../conexion/conexion_compra.php");
      $re=("select * from productos where id=".$_GET['id'])or 
                 die(mysql_error());
      $query=mysqli_query($conexion,$re); 
      while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
   
        ?>
  
      
   <center>
    <h1><?php echo $row['nombre'];?></h1><br>
    <img src="../public/img/productos/<?php echo $row['imagen'];?>"><br>
   
     <span>precio:<?php echo $row['precio'];?></span><br>
    <a class="btn btn-success" href="./carrito_compra.php?id=<?php  echo $row['id'];?>">añadir al carrito</a>
     <a href="../admin/pag_principal_admin.php" class="btn btn-success">Ir Atrás</a>
    </center>
  
    
 <?php } ?>
   
 
 
		
		

		
	</section>
	<script type="text/javascript"  href="../js/scripts.js"></script>
</body>
</html>