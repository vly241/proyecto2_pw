<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>registro</title>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    
     
    
</head>
<body>
   
 
            <div class="logo-title">
                <img src="public/img/beauty.png" alt="">
                
            </div>
           
    <div class="contenedor-form">
       
        
             <div class="menu">
                <a href="login_start.php"><li class="module-login active">Login</li></a>
               
                 <a href="login_registro.php"><li class="module-register">Register</li></a>
            </div>
       
       
        
     
        
       <div class="formulario">
            <h2>Registrate</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
              
               <div class="user line-input">
                  
                   <input type="text" placeholder="Usuario" name="usuario" required>
               </div>
               
               <div class="user line-input">
                  
                   <input type="text" placeholder="correo" name="correo" required>
               </div>
               
                <div class="password line-input">
                    <input type="password" placeholder="Contraseña" name="clave" required>
                </div>
                
                <div class="password line-input">
                    <input type="password" placeholder="comprobar Contraseña" name="clave2" required>
                </div>
                
                
                
                <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
                
                <input type="submit" value="Registrarse">
            </form>
            
            </div>
            
        <div class="reset-password">
            <a href="#">Olvide mi Contraseña?</a>
        </div>
    </div>
    <script src="public/js/jquery.min.js"></script>    
    <script src="public/js/login.js"></script>
</body>
</html>