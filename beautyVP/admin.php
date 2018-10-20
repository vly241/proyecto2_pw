<?php
 session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: sesion/principal.php');
    }

echo "<center><h1>ADMINISTRADOR</h1></center>";
echo "<center><h1>COMPROBACION IDENTIDAD</h1></center>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
       
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=bdbeautyvp', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :clave AND tipo_usuario = :tipo_usuario'
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':clave' => $clave,
            ':tipo_usuario'=>'admin'
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario['tipo_usuario']=='admin';
            header('location: sesion/principal.php');
            
        }else {
           $error .= '<i>Este usuario no existe</i>';
             
        }
    }
    
require 'pag_login.php';
 


?>