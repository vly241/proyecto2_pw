<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>beautyvp</title>
     <link rel="stylesheet" href="../public/css/pag_principal.css">
     <link rel="stylesheet" href="../public/css/styles.css">
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
.producto img{
	width: 40%;
	height: 40%;
	margin:0 auto;
}


    </style>
</head>
<body>
   
    <header class="header">
      <div class="contenedor">
        
        <img src="public/img/beauty.png" class="logo" alt="">
        
        <span class="icon-menu" id="btn-menu"></span>
        
        <nav class="nav" id="nav">
         
          <ul class="menu">
            <li class="menu__item"><a href="/" class="menu__link select">Inicio</a></li>
            <li class="menu__item"><a href="cerrar_registro.php" class="menu__link">Registrarse</a></li>
            <li class="menu__item"><a href="pag_producto.php" class="menu__link">productos</a></li>
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
   
  <section>
		
	<?php
     include ("../conexion/conexion_compra.php");
     $consulta="select * from productos";
     $query=mysqli_query($conexion, $consulta); 
     while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>

   <div class="producto">
   <center>
    <img src="../public/img/productos/<?php echo $f['imagen'];?>"><br>
    <span><?php echo $f['nombre'];?></span><br>
    <a class="btn btn-success" href="../detalles.php?id=<?php  echo $f['id'];?>">ver</a>
     <a class="btn btn-success" href="../carrito_compra.php?id=<?php  echo $f['id'];?>"> añadir al carrito</a>
    </center>
  </div>
 <?php
  }
 ?>
		
		

		
	</section>
   
</body>
</html>