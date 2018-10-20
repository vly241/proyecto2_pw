<?php session_start();

    if(isset($_SESSION['usuario'])){
        require '../usuarios/pag_principal_user.php';
    }
        
?>