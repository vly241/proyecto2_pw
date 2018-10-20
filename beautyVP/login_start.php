<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
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
            ':tipo_usuario'=>'usuario'
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario['tipo_usuario']=='usuario';
            header('location: sesion/sesion_usuario.php');
            
        }else {
          
              header('location: admin.php');
        }
    }
    
require 'pag_login.php';


?>