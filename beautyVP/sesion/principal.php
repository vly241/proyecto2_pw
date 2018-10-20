<?php session_start();

    if(isset($_SESSION['usuario'])){
        require '../admin/pag_principal_admin.php';
    }
        
?>