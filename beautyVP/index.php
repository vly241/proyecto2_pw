<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: sesion/principal.php');
    }else{
        header('location: login_start.php');
    }


?>